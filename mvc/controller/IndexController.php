<?php
/**
 * Created by PhpStorm.
 * User: Betho Junior
 * Date: 12/05/2018
 * Time: 12:22
 */
    class IndexController extends Controller{

        public $data;
        public $carousel;


        public function actionGeocorr(){
            $this->getData();
            $this->getOnlyOneCarousel();

            $this->rendererView("index/index");
            $this->rendererView("index/setImage");
            $this->rendererView("home/homeJavaScript");
            $this->rendererView("home/homeCss");

        }

        public function getOnlyOneCarousel(){
            $get = new AboutDao();
            $result = $get->getOnlyOneCarousel();

            $this->carousel = $result;
        }

        public function getData(){

            $get = new AboutDao();
            $result = $get->getDashboard();

            $this->data = $result;
        }


        public function actionLogin(){
            $this->rendererView("home/homeJavaScript");
            $this->rendererView("home/homeCss");
            $this->rendererView("login/login");
        }
        
    }   	