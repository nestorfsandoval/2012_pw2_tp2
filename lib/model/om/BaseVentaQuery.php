<?php


/**
 * Base class that represents a query for the 'venta' table.
 *
 * 
 *
 * @method     VentaQuery orderByIdventa($order = Criteria::ASC) Order by the idventa column
 * @method     VentaQuery orderByFecha($order = Criteria::ASC) Order by the fecha column
 * @method     VentaQuery orderByIdcliente($order = Criteria::ASC) Order by the idcliente column
 * @method     VentaQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 *
 * @method     VentaQuery groupByIdventa() Group by the idventa column
 * @method     VentaQuery groupByFecha() Group by the fecha column
 * @method     VentaQuery groupByIdcliente() Group by the idcliente column
 * @method     VentaQuery groupByIdproducto() Group by the idproducto column
 *
 * @method     VentaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     VentaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     VentaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     VentaQuery leftJoinCliente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cliente relation
 * @method     VentaQuery rightJoinCliente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cliente relation
 * @method     VentaQuery innerJoinCliente($relationAlias = null) Adds a INNER JOIN clause to the query using the Cliente relation
 *
 * @method     VentaQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method     VentaQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method     VentaQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method     Venta findOne(PropelPDO $con = null) Return the first Venta matching the query
 * @method     Venta findOneOrCreate(PropelPDO $con = null) Return the first Venta matching the query, or a new Venta object populated from the query conditions when no match is found
 *
 * @method     Venta findOneByIdventa(int $idventa) Return the first Venta filtered by the idventa column
 * @method     Venta findOneByFecha(string $fecha) Return the first Venta filtered by the fecha column
 * @method     Venta findOneByIdcliente(int $idcliente) Return the first Venta filtered by the idcliente column
 * @method     Venta findOneByIdproducto(int $idproducto) Return the first Venta filtered by the idproducto column
 *
 * @method     array findByIdventa(int $idventa) Return Venta objects filtered by the idventa column
 * @method     array findByFecha(string $fecha) Return Venta objects filtered by the fecha column
 * @method     array findByIdcliente(int $idcliente) Return Venta objects filtered by the idcliente column
 * @method     array findByIdproducto(int $idproducto) Return Venta objects filtered by the idproducto column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseVentaQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseVentaQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Venta', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new VentaQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    VentaQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof VentaQuery) {
			return $criteria;
		}
		$query = new VentaQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key.
	 * Propel uses the instance pool to skip the database if the object exists.
	 * Go fast if the query is untouched.
	 *
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Venta|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = VentaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(VentaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		$this->basePreSelect($con);
		if ($this->formatter || $this->modelAlias || $this->with || $this->select
		 || $this->selectColumns || $this->asColumns || $this->selectModifiers
		 || $this->map || $this->having || $this->joins) {
			return $this->findPkComplex($key, $con);
		} else {
			return $this->findPkSimple($key, $con);
		}
	}

	/**
	 * Find object by primary key using raw SQL to go fast.
	 * Bypass doSelect() and the object formatter by using generated code.
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con A connection object
	 *
	 * @return    Venta A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `IDVENTA`, `FECHA`, `IDCLIENTE`, `IDPRODUCTO` FROM `venta` WHERE `IDVENTA` = :p0';
		try {
			$stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key, PDO::PARAM_INT);
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
		}
		$obj = null;
		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$obj = new Venta();
			$obj->hydrate($row);
			VentaPeer::addInstanceToPool($obj, (string) $key);
		}
		$stmt->closeCursor();

		return $obj;
	}

	/**
	 * Find object by primary key.
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con A connection object
	 *
	 * @return    Venta|array|mixed the result, formatted by the current formatter
	 */
	protected function findPkComplex($key, $con)
	{
		// As the query uses a PK condition, no limit(1) is necessary.
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		$stmt = $criteria
			->filterByPrimaryKey($key)
			->doSelect($con);
		return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
		}
		$this->basePreSelect($con);
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		$stmt = $criteria
			->filterByPrimaryKeys($keys)
			->doSelect($con);
		return $criteria->getFormatter()->init($criteria)->format($stmt);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    VentaQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(VentaPeer::IDVENTA, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    VentaQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(VentaPeer::IDVENTA, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the idventa column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdventa(1234); // WHERE idventa = 1234
	 * $query->filterByIdventa(array(12, 34)); // WHERE idventa IN (12, 34)
	 * $query->filterByIdventa(array('min' => 12)); // WHERE idventa > 12
	 * </code>
	 *
	 * @param     mixed $idventa The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VentaQuery The current query, for fluid interface
	 */
	public function filterByIdventa($idventa = null, $comparison = null)
	{
		if (is_array($idventa) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(VentaPeer::IDVENTA, $idventa, $comparison);
	}

	/**
	 * Filter the query on the fecha column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByFecha('2011-03-14'); // WHERE fecha = '2011-03-14'
	 * $query->filterByFecha('now'); // WHERE fecha = '2011-03-14'
	 * $query->filterByFecha(array('max' => 'yesterday')); // WHERE fecha > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $fecha The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VentaQuery The current query, for fluid interface
	 */
	public function filterByFecha($fecha = null, $comparison = null)
	{
		if (is_array($fecha)) {
			$useMinMax = false;
			if (isset($fecha['min'])) {
				$this->addUsingAlias(VentaPeer::FECHA, $fecha['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fecha['max'])) {
				$this->addUsingAlias(VentaPeer::FECHA, $fecha['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VentaPeer::FECHA, $fecha, $comparison);
	}

	/**
	 * Filter the query on the idcliente column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdcliente(1234); // WHERE idcliente = 1234
	 * $query->filterByIdcliente(array(12, 34)); // WHERE idcliente IN (12, 34)
	 * $query->filterByIdcliente(array('min' => 12)); // WHERE idcliente > 12
	 * </code>
	 *
	 * @see       filterByCliente()
	 *
	 * @param     mixed $idcliente The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VentaQuery The current query, for fluid interface
	 */
	public function filterByIdcliente($idcliente = null, $comparison = null)
	{
		if (is_array($idcliente)) {
			$useMinMax = false;
			if (isset($idcliente['min'])) {
				$this->addUsingAlias(VentaPeer::IDCLIENTE, $idcliente['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idcliente['max'])) {
				$this->addUsingAlias(VentaPeer::IDCLIENTE, $idcliente['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VentaPeer::IDCLIENTE, $idcliente, $comparison);
	}

	/**
	 * Filter the query on the idproducto column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdproducto(1234); // WHERE idproducto = 1234
	 * $query->filterByIdproducto(array(12, 34)); // WHERE idproducto IN (12, 34)
	 * $query->filterByIdproducto(array('min' => 12)); // WHERE idproducto > 12
	 * </code>
	 *
	 * @see       filterByProducto()
	 *
	 * @param     mixed $idproducto The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VentaQuery The current query, for fluid interface
	 */
	public function filterByIdproducto($idproducto = null, $comparison = null)
	{
		if (is_array($idproducto)) {
			$useMinMax = false;
			if (isset($idproducto['min'])) {
				$this->addUsingAlias(VentaPeer::IDPRODUCTO, $idproducto['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idproducto['max'])) {
				$this->addUsingAlias(VentaPeer::IDPRODUCTO, $idproducto['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VentaPeer::IDPRODUCTO, $idproducto, $comparison);
	}

	/**
	 * Filter the query by a related Cliente object
	 *
	 * @param     Cliente|PropelCollection $cliente The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VentaQuery The current query, for fluid interface
	 */
	public function filterByCliente($cliente, $comparison = null)
	{
		if ($cliente instanceof Cliente) {
			return $this
				->addUsingAlias(VentaPeer::IDCLIENTE, $cliente->getIdClie(), $comparison);
		} elseif ($cliente instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(VentaPeer::IDCLIENTE, $cliente->toKeyValue('PrimaryKey', 'IdClie'), $comparison);
		} else {
			throw new PropelException('filterByCliente() only accepts arguments of type Cliente or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Cliente relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    VentaQuery The current query, for fluid interface
	 */
	public function joinCliente($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Cliente');

		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}

		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Cliente');
		}

		return $this;
	}

	/**
	 * Use the Cliente relation Cliente object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ClienteQuery A secondary query class using the current class as primary query
	 */
	public function useClienteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCliente($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Cliente', 'ClienteQuery');
	}

	/**
	 * Filter the query by a related Producto object
	 *
	 * @param     Producto|PropelCollection $producto The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VentaQuery The current query, for fluid interface
	 */
	public function filterByProducto($producto, $comparison = null)
	{
		if ($producto instanceof Producto) {
			return $this
				->addUsingAlias(VentaPeer::IDPRODUCTO, $producto->getIdproducto(), $comparison);
		} elseif ($producto instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(VentaPeer::IDPRODUCTO, $producto->toKeyValue('PrimaryKey', 'Idproducto'), $comparison);
		} else {
			throw new PropelException('filterByProducto() only accepts arguments of type Producto or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Producto relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    VentaQuery The current query, for fluid interface
	 */
	public function joinProducto($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Producto');

		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}

		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Producto');
		}

		return $this;
	}

	/**
	 * Use the Producto relation Producto object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ProductoQuery A secondary query class using the current class as primary query
	 */
	public function useProductoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinProducto($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Producto', 'ProductoQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Venta $venta Object to remove from the list of results
	 *
	 * @return    VentaQuery The current query, for fluid interface
	 */
	public function prune($venta = null)
	{
		if ($venta) {
			$this->addUsingAlias(VentaPeer::IDVENTA, $venta->getIdventa(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseVentaQuery