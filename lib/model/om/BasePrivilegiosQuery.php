<?php


/**
 * Base class that represents a query for the 'privilegios' table.
 *
 * 
 *
 * @method     PrivilegiosQuery orderByIdprivilegios($order = Criteria::ASC) Order by the idprivilegios column
 * @method     PrivilegiosQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 *
 * @method     PrivilegiosQuery groupByIdprivilegios() Group by the idprivilegios column
 * @method     PrivilegiosQuery groupByDescripcion() Group by the descripcion column
 *
 * @method     PrivilegiosQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PrivilegiosQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PrivilegiosQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PrivilegiosQuery leftJoinEmpleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleado relation
 * @method     PrivilegiosQuery rightJoinEmpleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleado relation
 * @method     PrivilegiosQuery innerJoinEmpleado($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleado relation
 *
 * @method     Privilegios findOne(PropelPDO $con = null) Return the first Privilegios matching the query
 * @method     Privilegios findOneOrCreate(PropelPDO $con = null) Return the first Privilegios matching the query, or a new Privilegios object populated from the query conditions when no match is found
 *
 * @method     Privilegios findOneByIdprivilegios(int $idprivilegios) Return the first Privilegios filtered by the idprivilegios column
 * @method     Privilegios findOneByDescripcion(string $descripcion) Return the first Privilegios filtered by the descripcion column
 *
 * @method     array findByIdprivilegios(int $idprivilegios) Return Privilegios objects filtered by the idprivilegios column
 * @method     array findByDescripcion(string $descripcion) Return Privilegios objects filtered by the descripcion column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePrivilegiosQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BasePrivilegiosQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Privilegios', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new PrivilegiosQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    PrivilegiosQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof PrivilegiosQuery) {
			return $criteria;
		}
		$query = new PrivilegiosQuery();
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
	 * @return    Privilegios|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = PrivilegiosPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(PrivilegiosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Privilegios A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `IDPRIVILEGIOS`, `DESCRIPCION` FROM `privilegios` WHERE `IDPRIVILEGIOS` = :p0';
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
			$obj = new Privilegios();
			$obj->hydrate($row);
			PrivilegiosPeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    Privilegios|array|mixed the result, formatted by the current formatter
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
	 * @return    PrivilegiosQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(PrivilegiosPeer::IDPRIVILEGIOS, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    PrivilegiosQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(PrivilegiosPeer::IDPRIVILEGIOS, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the idprivilegios column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdprivilegios(1234); // WHERE idprivilegios = 1234
	 * $query->filterByIdprivilegios(array(12, 34)); // WHERE idprivilegios IN (12, 34)
	 * $query->filterByIdprivilegios(array('min' => 12)); // WHERE idprivilegios > 12
	 * </code>
	 *
	 * @param     mixed $idprivilegios The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PrivilegiosQuery The current query, for fluid interface
	 */
	public function filterByIdprivilegios($idprivilegios = null, $comparison = null)
	{
		if (is_array($idprivilegios) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(PrivilegiosPeer::IDPRIVILEGIOS, $idprivilegios, $comparison);
	}

	/**
	 * Filter the query on the descripcion column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDescripcion('fooValue');   // WHERE descripcion = 'fooValue'
	 * $query->filterByDescripcion('%fooValue%'); // WHERE descripcion LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $descripcion The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PrivilegiosQuery The current query, for fluid interface
	 */
	public function filterByDescripcion($descripcion = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($descripcion)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $descripcion)) {
				$descripcion = str_replace('*', '%', $descripcion);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PrivilegiosPeer::DESCRIPCION, $descripcion, $comparison);
	}

	/**
	 * Filter the query by a related Empleado object
	 *
	 * @param     Empleado $empleado  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PrivilegiosQuery The current query, for fluid interface
	 */
	public function filterByEmpleado($empleado, $comparison = null)
	{
		if ($empleado instanceof Empleado) {
			return $this
				->addUsingAlias(PrivilegiosPeer::IDPRIVILEGIOS, $empleado->getIdprivilegio(), $comparison);
		} elseif ($empleado instanceof PropelCollection) {
			return $this
				->useEmpleadoQuery()
				->filterByPrimaryKeys($empleado->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByEmpleado() only accepts arguments of type Empleado or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Empleado relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PrivilegiosQuery The current query, for fluid interface
	 */
	public function joinEmpleado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Empleado');

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
			$this->addJoinObject($join, 'Empleado');
		}

		return $this;
	}

	/**
	 * Use the Empleado relation Empleado object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    EmpleadoQuery A secondary query class using the current class as primary query
	 */
	public function useEmpleadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinEmpleado($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Empleado', 'EmpleadoQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Privilegios $privilegios Object to remove from the list of results
	 *
	 * @return    PrivilegiosQuery The current query, for fluid interface
	 */
	public function prune($privilegios = null)
	{
		if ($privilegios) {
			$this->addUsingAlias(PrivilegiosPeer::IDPRIVILEGIOS, $privilegios->getIdprivilegios(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BasePrivilegiosQuery