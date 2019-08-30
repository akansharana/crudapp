<?php

namespace App\Controller;

use App\Controller\AppController;

class PostController extends AppController
{
    public function index()
    {
       $this->set('post', $this->Post->find('all'));
    }

    public function add(){

        if ($this->request->is('post')){
            if ($this->User->save($this->request->data)){

                $this->Session->setFlash('User was added.');
                $this->redirect(array('action' => 'index'));

            }else{
                $this->Session->setFlash('Unable to add user. Please, try again.');

            }
            }
        }

    public function edit() {

        $id = $this->request->params['pass'][0];


        $this->User->id = $id;


        if( $this->User->exists() ){

            if( $this->request->is( 'post' ) || $this->request->is( 'put' ) ){

                if( $this->User->save( $this->request->data ) ){


                    $this->Session->setFlash('User was edited.');

                    $this->redirect(array('action' => 'index'));

                }else{
                    $this->Session->setFlash('Unable to edit user. Please, try again.');
                }

            }else{

                $this->request->data = $this->User->read();
            }

        }else{

            $this->Session->setFlash('The user you are trying to edit does not exist.');
            $this->redirect(array('action' => 'index'));

        }


    }
    public function delete() {
        $id = $this->request->params['pass'][0];


        if( $this->request->is('get') ){

            $this->Session->setFlash('Delete method is not allowed.');
            $this->redirect(array('action' => 'index'));


        }else{

            if( !$id ) {
                $this->Session->setFlash('Invalid id for user');
                $this->redirect(array('action'=>'index'));

            }else{

                if( $this->User->delete( $id ) ){

                    $this->Session->setFlash('User was deleted.');

                    $this->redirect(array('action'=>'index'));

                }else{
                    $this->Session->setFlash('Unable to delete user.');
                    $this->redirect(array('action' => 'index'));
                }
            }
        }
    }

}

?>
