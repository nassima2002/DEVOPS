<?php

namespace App\Tests\Models;

use CodeIgniter\Test\CIUnitTestCase;
use App\Models\UserModel;

class UserModelTest extends CIUnitTestCase
{
    public function testFindAllUsers()
    {
        $model = new UserModel();
        $result = $model->findAll();

        $this->assertIsArray($result);
    }

    public function testInsertUser()
    {
        $model = new UserModel();
        $data = [
            'name'  => 'Test User',
            'email' => 'test@example.com'
        ];
        $insertId = $model->insert($data);

        $this->assertGreaterThan(0, $insertId);

    }
}
