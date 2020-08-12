<?php
/**
* Copyright © 2016 Magento. All rights reserved.
* See COPYING.txt for license details.
*/

namespace Ambab\UserCreation\Setup;

use Ambab\UserCreation\Model\ResourceModel\CustomerLink;
use Magento\Framework\DB\Adapter\AdapterInterface;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
    * {@inheritdoc}
    * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
    */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        /**
        * Create table 'greeting_message'
        */
        $table = $setup->getConnection()->newTable($setup->getTable(CustomerLink::TABLE_NAME));

        $table
            ->addColumn(
                'entity_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                [ 'identity' => true, 'nullable' => false, 'primary' => true, 'unsigned' => true ],
                'Entity ID'
            )->addColumn(
                'name',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                [ 'nullable' => false ],
                'Name'
            )->addColumn(
            'mobile',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            [ 'nullable' => false ],
            'Mobile'
        )->addColumn(
            'gender',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [ 'nullable' => false],
            'Gender'
        )->addColumn(
            'is_married',
            \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
            null,
            [ 'nullable' => false, 'default' => '1' ],
            'Is Married'
        );
        $setup->getConnection()->createTable($table);
    }
}
