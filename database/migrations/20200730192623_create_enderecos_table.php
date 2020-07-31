<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateEnderecosTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $this->table('enderecos')
            ->addColumn('logradouro', 'string', [
                'null' => false
            ])
            ->addColumn('complemento', 'string')
            ->addColumn('unidade', 'integer', [
                'null' => false,
                'default' => 0
            ])
            ->addColumn('bairro', 'string', [
                'null' => false
            ])
            ->addColumn('localidade', 'string', [
                'null' => false
            ])
            ->addColumn('uf', 'string', [
                'null' => false
            ])
            ->addColumn('cep', 'integer', [
                'null' => false
            ])
            ->addColumn('latitude', 'integer', [
                'default' => null
            ])
            ->addColumn('longitude', 'integer', [
                'default' => null
            ])
            ->addColumn('ibge', 'integer')
            ->addColumn('gia', 'integer')
            ->addColumn('created_at', 'datetime',[
                'default' => 'CURRENT_TIMESTAMP'
            ])
            ->addColumn('updated_at', 'datetime',[
                'default' => 'CURRENT_TIMESTAMP'
            ])
            ->create();
    }
}
