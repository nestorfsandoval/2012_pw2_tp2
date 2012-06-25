<?php



/**
 * This class defines the structure of the 'registroCompra' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.map
 */
class RegistrocompraTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.RegistrocompraTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
		// attributes
		$this->setName('registroCompra');
		$this->setPhpName('Registrocompra');
		$this->setClassname('Registrocompra');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('IDCOMPRA', 'Idcompra', 'INTEGER', true, 10, null);
		$this->addColumn('FECHA', 'Fecha', 'DATE', true, null, null);
		$this->addForeignKey('IDPROVEE', 'Idprovee', 'INTEGER', 'proveedor', 'IDPROVEEDOR', true, 10, null);
		$this->addColumn('N_FACTURA', 'NFactura', 'VARCHAR', true, 45, null);
		$this->addColumn('VALOR', 'Valor', 'DECIMAL', true, null, null);
		$this->addColumn('REMITO', 'Remito', 'VARCHAR', true, 45, null);
		$this->addColumn('IDEMPLEADO', 'Idempleado', 'INTEGER', true, 10, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Proveedor', 'Proveedor', RelationMap::MANY_TO_ONE, array('idprovee' => 'idproveedor', ), 'CASCADE', 'CASCADE');
	} // buildRelations()

	/**
	 *
	 * Gets the list of behaviors registered for this table
	 *
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
		);
	} // getBehaviors()

} // RegistrocompraTableMap
