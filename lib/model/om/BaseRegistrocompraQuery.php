<?php


/**
 * Base class that represents a query for the 'registroCompra' table.
 *
 * 
 *
 * @method     RegistrocompraQuery orderByIdcompra($order = Criteria::ASC) Order by the idcompra column
 * @method     RegistrocompraQuery orderByFecha($order = Criteria::ASC) Order by the fecha column
 * @method     RegistrocompraQuery orderByIdprovee($order = Criteria::ASC) Order by the idprovee column
 * @method     RegistrocompraQuery orderByNFactura($order = Criteria::ASC) Order by the n_factura column
 * @method     RegistrocompraQuery orderByValor($order = Criteria::ASC) Order by the valor column
 * @method     RegistrocompraQuery orderByRemito($order = Criteria::ASC) Order by the remito column
 * @method     RegistrocompraQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 *
 * @method     RegistrocompraQuery groupByIdcompra() Group by the idcompra column
 * @method     RegistrocompraQuery groupByFecha() Group by the fecha column
 * @method     RegistrocompraQuery groupByIdprovee() Group by the idprovee column
 * @method     RegistrocompraQuery groupByNFactura() Group by the n_factura column
 * @method     RegistrocompraQuery groupByValor() Group by the valor column
 * @method     RegistrocompraQuery groupByRemito() Group by the remito column
 * @method     RegistrocompraQuery groupByIdempleado() Group by the idempleado column
 *
 * @method     RegistrocompraQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RegistrocompraQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RegistrocompraQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     RegistrocompraQuery leftJoinProveedor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Proveedor relation
 * @method     RegistrocompraQuery rightJoinProveedor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Proveedor relation
 * @method     RegistrocompraQuery innerJoinProveedor($relationAlias = null) Adds a INNER JOIN clause to the query using the Proveedor relation
 *
 * @method     Registrocompra findOne(PropelPDO $con = null) Return the first Registrocompra matching the query
 * @method     Registrocompra findOneOrCreate(PropelPDO $con = null) Return the first Registrocompra matching the query, or a new Registrocompra object populated from the query conditions when no match is found
 *
 * @method     Registrocompra findOneByIdcompra(int $idcompra) Return the first Registrocompra filtered by the idcompra column
 * @method     Registrocompra findOneByFecha(string $fecha) Return the first Registrocompra filtered by the fecha column
 * @method     Registrocompra findOneByIdprovee(int $idprovee) Return the first Registrocompra filtered by the idprovee column
 * @method     Registrocompra findOneByNFactura(string $n_factura) Return the first Registrocompra filtered by the n_factura column
 * @method     Registrocompra findOneByValor(string $valor) Return the first Registrocompra filtered by the valor column
 * @method     Registrocompra findOneByRemito(string $remito) Return the first Registrocompra filtered by the remito column
 * @method     Registrocompra findOneByIdempleado(int $idempleado) Return the first Registrocompra filtered by the idempleado column
 *
 * @method     array findByIdcompra(int $idcompra) Return Registrocompra objects filtered by the idcompra column
 * @method     array findByFecha(string $fecha) Return Registrocompra objects filtered by the fecha column
 * @method     array findByIdprovee(int $idprovee) Return Registrocompra objects filtered by the idprovee column
 * @method     array findByNFactura(string $n_factura) Return Registrocompra objects filtered by the n_factura column
 * @method     array findByValor(string $valor) Return Registrocompra objects filtered by the valor column
 * @method     array findByRemito(string $remito) Return Registrocompra objects filtered by the remito column
 * @method     array findByIdempleado(int $idempleado) Return Registrocompra objects filtered by the idempleado column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseRegistrocompraQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseRegistrocompraQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Registrocompra', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new RegistrocompraQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    RegistrocompraQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof RegistrocompraQuery) {
			return $criteria;
		}
		$query = new RegistrocompraQuery();
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
	 * @return    Registrocompra|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = RegistrocompraPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(RegistrocompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Registrocompra A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `IDCOMPRA`, `FECHA`, `IDPROVEE`, `N_FACTURA`, `VALOR`, `REMITO`, `IDEMPLEADO` FROM `registroCompra` WHERE `IDCOMPRA` = :p0';
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
			$obj = new Registrocompra();
			$obj->hydrate($row);
			RegistrocompraPeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    Registrocompra|array|mixed the result, formatted by the current formatter
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
	 * @return    RegistrocompraQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(RegistrocompraPeer::IDCOMPRA, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    RegistrocompraQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(RegistrocompraPeer::IDCOMPRA, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the idcompra column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdcompra(1234); // WHERE idcompra = 1234
	 * $query->filterByIdcompra(array(12, 34)); // WHERE idcompra IN (12, 34)
	 * $query->filterByIdcompra(array('min' => 12)); // WHERE idcompra > 12
	 * </code>
	 *
	 * @param     mixed $idcompra The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RegistrocompraQuery The current query, for fluid interface
	 */
	public function filterByIdcompra($idcompra = null, $comparison = null)
	{
		if (is_array($idcompra) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(RegistrocompraPeer::IDCOMPRA, $idcompra, $comparison);
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
	 * @return    RegistrocompraQuery The current query, for fluid interface
	 */
	public function filterByFecha($fecha = null, $comparison = null)
	{
		if (is_array($fecha)) {
			$useMinMax = false;
			if (isset($fecha['min'])) {
				$this->addUsingAlias(RegistrocompraPeer::FECHA, $fecha['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fecha['max'])) {
				$this->addUsingAlias(RegistrocompraPeer::FECHA, $fecha['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(RegistrocompraPeer::FECHA, $fecha, $comparison);
	}

	/**
	 * Filter the query on the idprovee column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdprovee(1234); // WHERE idprovee = 1234
	 * $query->filterByIdprovee(array(12, 34)); // WHERE idprovee IN (12, 34)
	 * $query->filterByIdprovee(array('min' => 12)); // WHERE idprovee > 12
	 * </code>
	 *
	 * @see       filterByProveedor()
	 *
	 * @param     mixed $idprovee The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RegistrocompraQuery The current query, for fluid interface
	 */
	public function filterByIdprovee($idprovee = null, $comparison = null)
	{
		if (is_array($idprovee)) {
			$useMinMax = false;
			if (isset($idprovee['min'])) {
				$this->addUsingAlias(RegistrocompraPeer::IDPROVEE, $idprovee['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idprovee['max'])) {
				$this->addUsingAlias(RegistrocompraPeer::IDPROVEE, $idprovee['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(RegistrocompraPeer::IDPROVEE, $idprovee, $comparison);
	}

	/**
	 * Filter the query on the n_factura column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByNFactura('fooValue');   // WHERE n_factura = 'fooValue'
	 * $query->filterByNFactura('%fooValue%'); // WHERE n_factura LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $nFactura The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RegistrocompraQuery The current query, for fluid interface
	 */
	public function filterByNFactura($nFactura = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($nFactura)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $nFactura)) {
				$nFactura = str_replace('*', '%', $nFactura);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RegistrocompraPeer::N_FACTURA, $nFactura, $comparison);
	}

	/**
	 * Filter the query on the valor column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByValor(1234); // WHERE valor = 1234
	 * $query->filterByValor(array(12, 34)); // WHERE valor IN (12, 34)
	 * $query->filterByValor(array('min' => 12)); // WHERE valor > 12
	 * </code>
	 *
	 * @param     mixed $valor The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RegistrocompraQuery The current query, for fluid interface
	 */
	public function filterByValor($valor = null, $comparison = null)
	{
		if (is_array($valor)) {
			$useMinMax = false;
			if (isset($valor['min'])) {
				$this->addUsingAlias(RegistrocompraPeer::VALOR, $valor['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($valor['max'])) {
				$this->addUsingAlias(RegistrocompraPeer::VALOR, $valor['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(RegistrocompraPeer::VALOR, $valor, $comparison);
	}

	/**
	 * Filter the query on the remito column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByRemito('fooValue');   // WHERE remito = 'fooValue'
	 * $query->filterByRemito('%fooValue%'); // WHERE remito LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $remito The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RegistrocompraQuery The current query, for fluid interface
	 */
	public function filterByRemito($remito = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($remito)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $remito)) {
				$remito = str_replace('*', '%', $remito);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RegistrocompraPeer::REMITO, $remito, $comparison);
	}

	/**
	 * Filter the query on the idempleado column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdempleado(1234); // WHERE idempleado = 1234
	 * $query->filterByIdempleado(array(12, 34)); // WHERE idempleado IN (12, 34)
	 * $query->filterByIdempleado(array('min' => 12)); // WHERE idempleado > 12
	 * </code>
	 *
	 * @param     mixed $idempleado The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RegistrocompraQuery The current query, for fluid interface
	 */
	public function filterByIdempleado($idempleado = null, $comparison = null)
	{
		if (is_array($idempleado)) {
			$useMinMax = false;
			if (isset($idempleado['min'])) {
				$this->addUsingAlias(RegistrocompraPeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idempleado['max'])) {
				$this->addUsingAlias(RegistrocompraPeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(RegistrocompraPeer::IDEMPLEADO, $idempleado, $comparison);
	}

	/**
	 * Filter the query by a related Proveedor object
	 *
	 * @param     Proveedor|PropelCollection $proveedor The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RegistrocompraQuery The current query, for fluid interface
	 */
	public function filterByProveedor($proveedor, $comparison = null)
	{
		if ($proveedor instanceof Proveedor) {
			return $this
				->addUsingAlias(RegistrocompraPeer::IDPROVEE, $proveedor->getIdproveedor(), $comparison);
		} elseif ($proveedor instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(RegistrocompraPeer::IDPROVEE, $proveedor->toKeyValue('PrimaryKey', 'Idproveedor'), $comparison);
		} else {
			throw new PropelException('filterByProveedor() only accepts arguments of type Proveedor or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Proveedor relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RegistrocompraQuery The current query, for fluid interface
	 */
	public function joinProveedor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Proveedor');

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
			$this->addJoinObject($join, 'Proveedor');
		}

		return $this;
	}

	/**
	 * Use the Proveedor relation Proveedor object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ProveedorQuery A secondary query class using the current class as primary query
	 */
	public function useProveedorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinProveedor($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Proveedor', 'ProveedorQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Registrocompra $registrocompra Object to remove from the list of results
	 *
	 * @return    RegistrocompraQuery The current query, for fluid interface
	 */
	public function prune($registrocompra = null)
	{
		if ($registrocompra) {
			$this->addUsingAlias(RegistrocompraPeer::IDCOMPRA, $registrocompra->getIdcompra(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseRegistrocompraQuery