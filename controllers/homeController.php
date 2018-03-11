<?php
class homeController extends controller 
{
    public function index() 
    {
    	$t = new tabela();

    	$tabelaFull = $t->getTabelaFull();

//    	print_r($tabelaFull);

       	$dados = array();
      
       	if(isset($_POST['certidao']) &&  !empty($_POST['certidao'])){
			switch ($_POST['certidao']) {
				case '1':
					
					$formCertidao = array(	'nome' 		=> '', 
											'idade' 	=> '', 
											'nome_pai'	=> '', 
											'nome_mae' 	=> ''
									);
					

					$tabela = array_intersect_key($tabelaFull, $formCertidao);
					break;

				case '2':
					$formCertidao = array(	'nome' 			=> '', 
											'estado_civil' 	=> '', 
											'registro' 		=> '', 
											'doce' 			=> ''
									);
					
					$tabela = array_intersect_key($tabelaFull, $formCertidao);				
					break;

				case '3':
					$formCertidao = array(	'nome' 		=> '', 
											'cpf' 		=> '', 
											'data_nasc' => '', 
											'email' 	=> '',
											'rg' 		=> '', 
											'registro' 	=> ''
									);
					$tabela = array_intersect_key($tabelaFull, $formCertidao);
					break;

				default:
					header('Location:index.php');
					break;
			}
		
		
		$tabela = array_flip($tabela);
		print_r($tabela);
		$dados['tabela'] = $tabela;

		} else{
			header('index.php');
		}	      


        
       $this->loadTemplate('home', $dados);
    }

}