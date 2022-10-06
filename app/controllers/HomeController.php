<?php

/**
 * home - Controller de exemplo
 * @author Cândido Farias
 * @package mvc
 * @since 0.1
 */
class HomeController extends MainController
{ 

	public function __construct(){
		parent::__construct();
		if(!isset($_SESSION['user'])){
			header("Location:".URL_BASE."users/login");
		}
	}

	/**
	 * Carrega a página "/views/home/index.php"
	 */
    public function index() {
		# Título da página
		$this->title = 'Home';
		
		$model=$this->load_model("Moviments");
		$summary=$model->listSummary();
		# Carrega os arquivos do view	pasta/arquivo	
		$this->view->show('home/dashboard',$summary);
	} // index

} // class HomeController