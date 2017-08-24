<?php

namespace TricarteBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Unirest\Request as UnirestRequest;
use Unirest\Request\Body as UnirestBody;
use GuzzleHttp\Client as GuzzleHttp;

class DefaultController extends Controller
{
    public function indexAction()
    {
		try{
			$client = new GuzzleHttp;
			$response = $client->request('GET', 'https://recrutement.local-trust.com/test/cards/57187b7c975adeb8520a283c',  ['verify' => false]);
			$body = json_decode($response->getBody()->getContents());
		}catch(\Exception $e){
			die ('Une ereur est survenue lors de l\'appel du service: '.$e->getMessage() );
		}	
			
		$solution = $this->triCartes($body);
		try{	
			$solutionResponse = $client->request('POST', 'https://recrutement.local-trust.com/test/'.$body->exerciceId, ['json' => $solution, 'verify' => false]);
			
			if($solutionResponse->getStatusCode() == 200){
				echo 'Bonne réponse';
			}else{	
				echo 'Une erreur est survenbue lors de l\'appel';
			}
		}catch(\Exception $e) {
            return new Response($e->getMessage());
        }
		return $this->render('TricarteBundle:Default:index.html.twig');
    }
	
	private function triCartes($problem){	
		$cards = $problem->data->cards;
		$categories = $problem->data->categoryOrder;
		$values = $problem->data->valueOrder;

		usort($cards, function($c1, $c2) use($categories, $values){
			$c1Category = array_search($c1->category, $categories);
			$c2Category = array_search($c2->category, $categories);
			if($c1Category == $c2Category){
				$c1Value = array_search($c1->value, $values);
				$c2Value = array_search($c2->value, $values);
				return $c1Value > $c2Value;
			}
			return $c1Category > $c2Category;
		});
		$solution = new \stdClass;
		$solution->cards = $cards ;
		$solution->categoryOrder = $categories ;
		$solution->valueOrder = $values ;
		return $solution;
	}
}
