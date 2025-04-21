<?php
namespace App\Tests\Models;

use PHPUnit\Framework\TestCase;
use App\Models\CommandModel;

class CommandModelTest extends TestCase
{
    public function testFindAllCommands()
    {
        $model = new CommandModel();
        $commands = $model->findAll();

        $this->assertIsArray($commands, "findAll should return an array.");
    }

    public function testInsertCommand()
    {
        $model = new CommandModel();
        $data = [
            'reference' => 'CMD2025',
            'amount' => 1500
        ];
        $id = $model->insert($data);

        $this->assertGreaterThan(0, $id, "Command ID inserted should be > 0");
    }
}
?>
