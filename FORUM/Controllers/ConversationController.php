<?php
class ConversationController extends CoreController
{
    const MODEL = 'Conversation';

    public function list()
    {
        $class = static::MODEL;
        $datas = $this->_model->readAll();

        foreach($datas as $data)
        {
            $conversation = new $class($data);
            $conversation[] = $conversation;
        }

        include('Views/' . $class . '/index.php');
    }
}