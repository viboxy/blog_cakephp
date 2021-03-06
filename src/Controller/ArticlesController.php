<?php
namespace App\Controller;


class ArticlesController extends AppController{
    public function initialize(){
        parent::initialize();
    }

    public $helpers = ['Form', 'Html'];

    public function index($short = null){
        if($this->request->is('post')){
            $article = $this->Articles->newEntity($this->request->data);
            if($this->Article->save($article)){
                return $this->redirect(['action' => 'index']);
            }
        }
        if(!empty($short)){
            $result = $this->Article->find('all',[
                'field' => ['id', 'title']
            ]);
        }else{
            $result = $this->Articles->find();
        }
        $this->set([
            'title' => 'Articles',
            'articles' => $result
        ]);
    }

    public function view($id = null){
        $article = $this->Articles->get($id);
        $this->set(compact('article'));
    }

    public function add(){
        $article = $this->Articles->newEntity();
        if($this->request->is('post')){
            $article = $this->Articles->patchEntity($article, $this->request->data);
            if($this->Articles->save($article)){
                $this->Flash->success(__('Your article has been saved'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your article'));
        }
        $this->set('article', $article);

        $categories = $this->Articles->Categories->find('treeList');
        $this->set(compact('categories'));
    }
    
    public function edit($id = null){
        $article = $this->Articles->get($id);
        if($this->request->is('post')){
            $this->Articles->patchEntity($article, $this->request->data);
            if($this->Articles->save($article)){
                $this->Flash->success(__('Your article has been updated'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update the article'));
        }
        $this->set('article', $article);
    }
    
    public function delete($id){
        $this->request->allowMethod(['post', 'delete']);
        $article = $this->Articles->get($id);
        if($this->Articles->delete($article)){
            $this->Flash->success(__('The article with id: {0} has been deleted', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
}
?>