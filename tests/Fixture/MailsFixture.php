<?php

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

class MailsFixture extends TestFixture{
    //public $useDbConfig = 'test';
    public $fields = [
        'id' => [
            'type' => 'integer',
            'key' => 'primary'
        ],
        'title' => [
            'type' => 'string',
            'length' => '255',
            'null' => false
        ],
        'body' => 'text',
        'created' => 'datatime',
        'modified' => 'datatime'
    ];
    public $records = [
        [
            'id' => 1,
            'title' => 'First article',
            'body' => 'First article body',
            'created' => '2007-03-18 10:39:23',
            'modified' => '2007-03-18 10:41:31'
        ],
        [
            'id' => 2,
            'title' => 'Second article',
            'body' => 'Second article body',
            'created' => '2007-03-18 10:39:23',
            'modified' => '2007-03-18 10:41:31'
        ]
    ];
}
?>