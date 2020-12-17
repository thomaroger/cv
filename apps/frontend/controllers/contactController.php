<?php
use \Mailjet\Resources;

class contactController extends Controller
{
    public function action()
    {	
    	$request = $this->getRequest();
    	$nom = $request->getParameter('contact','nom');
		$prenom = $request->getParameter('contact','prenom');
		$email = $request->getParameter('contact','email');
		$message = $request->getParameter('contact','message');
		$date = date('d/m/Y h:i:s');


		$headers = 'From: '.$email."\r\n" .
		 'Reply-To: '.$email . "\r\n" .
		 'X-Mailer: PHP/' . phpversion().
		 'MIME-Version: 1.0' . "\r\n".
		 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


	     $text = '
		     <html>
		      <head>
		       <title>'.CONTACT_SUBJECT.'</title>
		      </head>
		      <body>
		       <table>
		        <tr>
		         <td>Nom</td>
		         <td>'.$nom.'</td>
		        </tr>
		        <tr>
		         <td>Prenom</td>
		         <td>'.$prenom.'</td>
		        </tr>
		        <tr>
		         <td>Email</td>
		         <td>'.$email.'</td>
		        </tr>
		        <tr>
		         <td>Message</td>
		         <td>'.$message.'</td>
		        </tr>
		        <tr>
		         <td>Date</td>
		         <td>'.$date.'</td>
		        </tr>
		       </table>
		      </body>
	     </html>
	     ';

	    if(!empty($nom)) {

	    	$mj = new \Mailjet\Client(getenv('MJ_APIKEY_PUBLIC'), getenv('MJ_APIKEY_PRIVATE'),true,['version' => 'v3.1']);
			$body = [
			    'Messages' => [
			        [
			            'From' => [
			                'Email' => CONTACT_EMAIL,
			            ],
			            'To' => [
			                [
			                    'Email' => CONTACT_EMAIL,
			                ]
			            ],
			            'Subject' => CONTACT_SUBJECT,
			            'HTMLPart' => $text
			        ]
			    ]
			];
			$response = $mj->post(Resources::$Email, ['body' => $body]);
			if($response->success()) {
				$this->getError()->setError(0, "Un email a été envoyé.", Error::LOG_NOTICE);
			} else {
				$this->getError()->setError(0, "Un problème technique est survenu. Veuillez réessayer plus tard." , Error::LOG_ERROR);
			}
		}
    }
}
