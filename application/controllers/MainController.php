<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller {

	public function indexAction() {
		echo 'Главная страници';
	}

	public function contactAction() {
		echo "Contocts";
	}
}
