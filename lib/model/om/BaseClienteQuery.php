<?php


/**
 * Base class that represents a query for the 'cliente' table.
 *
 * 
 *
 * @method     ClienteQuery orderByIdClie($order = Criteria::ASC) Order by the id_clie column
 * @method     ClienteQuery orderByApellido($order = Criteria::ASC) Order by the apellido column
 * @method     ClienteQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method     ClienteQuery orderByTelefono($order = Criteria::ASC) Order by the telefono column
 * @method     ClienteQuery orderByDireccion($order = Criteria::ASC) Order by the direccion column
 * @method     ClienteQuery orderByIdProv($order = Criteria::ASC) Order by the id_prov column
 * @method     ClienteQuery orderByIdCiudad($order = Criteria::ASC) Order by the id_ciudad column
 * @method     ClienteQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     ClienteQuery orderByUser($order = Criteria::ASC) Order by the user column
 * @method     ClienteQuery orderByPass($order = Criteria::ASC) Order by the pass column
 *
 * @method     ClienteQuery groupByIdClie() Group by the id_clie column
 * @method     ClienteQuery groupByApellido() Group by the apellido column
 * @method     ClienteQuery groupByNombre() Group by the nombre column
 * @method     ClienteQuery groupByTelefono() Group by the telefono column
 * @method     ClienteQuery groupByDireccion() Group by the direccion column
 * @method     ClienteQuery groupByIdProv() Group by the id_prov column
 * @method     ClienteQuery groupByIdCiudad() Group by the id_ciudad column
 * @method     ClienteQuery groupByEmail() Group by the email column
 * @method     ClienteQuery groupByUser() Group by the user column
 * @method     ClienteQuery groupByPass() Group by the pass column
 *
 * @method     ClienteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ClienteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ClienteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ClienteQuery leftJoinCiudadRelatedByIdProv($relationAlias = null) Adds a LEFT JOIN clause to the query using the CiudadRelatedByIdProv relation
 * @method     ClienteQuery rightJoinCiudadRelatedByIdProv($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CiudadRelatedByIdProv relation
 * @method     ClienteQuery innerJoinCiudadRelatedByIdProv($relationAlias = null) Adds a INNER JOIN clause to the query using the CiudadRelatedByIdProv relation
 *
 * @method     ClienteQuery leftJoinCiudadRelatedByIdCiudad($relationAlias = null) Adds a LEFT JOIN clause to the query using the CiudadRelatedByIdCiudad relation
 * @method     ClienteQuery rightJoinCiudadRelatedByIdCiudad($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CiudadRelatedByIdCiudad relation
 * @method     ClienteQuery innerJoinCiudadRelatedByIdCiudad($relationAlias = null) Adds a INNER JOIN clause to the query using the CiudadRelatedByIdCiudad relation
 *
 * @method     ClienteQuery leftJoinVenta($relationAlias = null) Adds a LEFT JOIN clause to the query using the Venta relation
 * @method     ClienteQuery rightJoinVenta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Venta relation
 * @method     ClienteQuery innerJoinVenta($relationAlias = null) Adds a INNER JOIN clause to the query using the Venta relation
 *
 * @method     Cliente findOne(PropelPDO $con = null) Return the first Cliente matching the query
 * @method     Cliente findOneOrCreate(PropelPDO $con = null) Return the first Cliente matching the query, or a new Cliente object populated from the query conditions when no match is found
 *
 * @method     Cliente findOneByIdClie(int $id_clie) Return the first Cliente filtered by the id_clie column
 * @method     Cliente findOneByApellido(string $apellido) Return the first Cliente filtered by the apellido column
 * @method     Cliente findOneByNombre(string $nombre) Return the first Cliente filtered by the nombre column
 * @method     Cliente findOneByTelefono(string $telefono) Return the first Cliente filtered by the telefono column
 * @method     Cliente findOneByDireccion(string $direccion) Return the first Cliente filtered by the direccion column
 * @method     Cliente findOneByIdProv(int $id_prov) Return the first Cliente filtered by the id_prov column
 * @method     Cliente findOneByIdCiudad(int $id_ciudad) Return the first Cliente filtered by the id_ciudad column
 * @method     Cliente findOneByEmail(string $email) Return the first Cliente filtered by the email column
 * @method     Cliente findOneByUser(string $user) Return the first Cliente filtered by the user column
 * @method     Cliente findOneByPass(string $pass) Return the first Cliente filtered by the pass column
 *
 * @method     array findByIdClie(int $id_clie) Return Cliente objects filtered by the id_clie column
 * @method     array findByApellido(string $apellido) Return Cliente objects filtered by the apellido column
 * @method     array findByNombre(string $nombre) Return Cliente objects filtered by the nombre column
 * @method     array findByTelefono(string $telefono) Return Cliente objects filtered by the telefono column
 * @method     array findByDireccion(string $direccion) Return Cliente objects filtered by the direccion column
 * @method     array findByIdProv(int $id_prov) Return Cliente objects filtered by the id_prov column
 * @method     array findByIdCiudad(int $id_ciudad) Return Cliente objects filtered by the id_ciudad column
 * @method     array findByEmail(string $email) Return Cliente objects filtered by the email column
 * @method     array findByUser(string $user) Return Cliente objects filtered by the user column
 * @method     array findByPass(string $pass) Return Cliente objects filtered by the pass column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseClienteQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseClienteQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Cliente', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ClienteQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ClienteQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ClienteQuery) {
			return $criteria;
		}
		$query = new ClienteQuery();
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
	 * @return    Cliente|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = ClientePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(ClientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Cliente A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_CLIE`, `APELLIDO`, `NOMBRE`, `TELEFONO`, `DIRECCION`, `ID_PROV`, `ID_CIUDAD`, `EMAIL`, `USER`, `PASS` FROM `cliente` WHERE `ID_CLIE` = :p0';
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
			$obj = new Cliente();
			$obj->hydrate($row);
			ClientePeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    Cliente|array|mixed the result, formatted by the current formatter
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
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ClientePeer::ID_CLIE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ClientePeer::ID_CLIE, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_clie column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdClie(1234); // WHERE id_clie = 1234
	 * $query->filterByIdClie(array(12, 34)); // WHERE id_clie IN (12, 34)
	 * $query->filterByIdClie(array('min' => 12)); // WHERE id_clie > 12
	 * </code>
	 *
	 * @param     mixed $idClie The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByIdClie($idClie = null, $comparison = null)
	{
		if (is_array($idClie) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ClientePeer::ID_CLIE, $idClie, $comparison);
	}

	/**
	 * Filter the query on the apellido column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByApellido('fooValue');   // WHERE apellido = 'fooValue'
	 * $query->filterByApellido('%fooValue%'); // WHERE apellido LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $apellido The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByApellido($apellido = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($apellido)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $apellido)) {
				$apellido = str_replace('*', '%', $apellido);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ClientePeer::APELLIDO, $apellido, $comparison);
	}

	/**
	 * Filter the query on the nombre column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByNombre('fooValue');   // WHERE nombre = 'fooValue'
	 * $query->filterByNombre('%fooValue%'); // WHERE nombre LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $nombre The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByNombre($nombre = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($nombre)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $nombre)) {
				$nombre = str_replace('*', '%', $nombre);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ClientePeer::NOMBRE, $nombre, $comparison);
	}

	/**
	 * Filter the query on the telefono column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTelefono('fooValue');   // WHERE telefono = 'fooValue'
	 * $query->filterByTelefono('%fooValue%'); // WHERE telefono LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $telefono The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByTelefono($telefono = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($telefono)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $telefono)) {
				$telefono = str_replace('*', '%', $telefono);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ClientePeer::TELEFONO, $telefono, $comparison);
	}

	/**
	 * Filter the query on the direccion column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDireccion('fooValue');   // WHERE direccion = 'fooValue'
	 * $query->filterByDireccion('%fooValue%'); // WHERE direccion LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $direccion The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByDireccion($direccion = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($direccion)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $direccion)) {
				$direccion = str_replace('*', '%', $direccion);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ClientePeer::DIRECCION, $direccion, $comparison);
	}

	/**
	 * Filter the query on the id_prov column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdProv(1234); // WHERE id_prov = 1234
	 * $query->filterByIdProv(array(12, 34)); // WHERE id_prov IN (12, 34)
	 * $query->filterByIdProv(array('min' => 12)); // WHERE id_prov > 12
	 * </code>
	 *
	 * @see       filterByCiudadRelatedByIdProv()
	 *
	 * @param     mixed $idProv The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByIdProv($idProv = null, $comparison = null)
	{
		if (is_array($idProv)) {
			$useMinMax = false;
			if (isset($idProv['min'])) {
				$this->addUsingAlias(ClientePeer::ID_PROV, $idProv['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idProv['max'])) {
				$this->addUsingAlias(ClientePeer::ID_PROV, $idProv['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ClientePeer::ID_PROV, $idProv, $comparison);
	}

	/**
	 * Filter the query on the id_ciudad column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCiudad(1234); // WHERE id_ciudad = 1234
	 * $query->filterByIdCiudad(array(12, 34)); // WHERE id_ciudad IN (12, 34)
	 * $query->filterByIdCiudad(array('min' => 12)); // WHERE id_ciudad > 12
	 * </code>
	 *
	 * @see       filterByCiudadRelatedByIdCiudad()
	 *
	 * @param     mixed $idCiudad The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByIdCiudad($idCiudad = null, $comparison = null)
	{
		if (is_array($idCiudad)) {
			$useMinMax = false;
			if (isset($idCiudad['min'])) {
				$this->addUsingAlias(ClientePeer::ID_CIUDAD, $idCiudad['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCiudad['max'])) {
				$this->addUsingAlias(ClientePeer::ID_CIUDAD, $idCiudad['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ClientePeer::ID_CIUDAD, $idCiudad, $comparison);
	}

	/**
	 * Filter the query on the email column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
	 * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $email The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByEmail($email = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($email)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $email)) {
				$email = str_replace('*', '%', $email);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ClientePeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query on the user column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByUser('fooValue');   // WHERE user = 'fooValue'
	 * $query->filterByUser('%fooValue%'); // WHERE user LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByUser($user = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user)) {
				$user = str_replace('*', '%', $user);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ClientePeer::USER, $user, $comparison);
	}

	/**
	 * Filter the query on the pass column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPass('fooValue');   // WHERE pass = 'fooValue'
	 * $query->filterByPass('%fooValue%'); // WHERE pass LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $pass The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByPass($pass = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($pass)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $pass)) {
				$pass = str_replace('*', '%', $pass);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ClientePeer::PASS, $pass, $comparison);
	}

	/**
	 * Filter the query by a related Ciudad object
	 *
	 * @param     Ciudad|PropelCollection $ciudad The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByCiudadRelatedByIdProv($ciudad, $comparison = null)
	{
		if ($ciudad instanceof Ciudad) {
			return $this
				->addUsingAlias(ClientePeer::ID_PROV, $ciudad->getIdProvincia(), $comparison);
		} elseif ($ciudad instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(ClientePeer::ID_PROV, $ciudad->toKeyValue('PrimaryKey', 'IdProvincia'), $comparison);
		} else {
			throw new PropelException('filterByCiudadRelatedByIdProv() only accepts arguments of type Ciudad or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the CiudadRelatedByIdProv relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function joinCiudadRelatedByIdProv($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('CiudadRelatedByIdProv');

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
			$this->addJoinObject($join, 'CiudadRelatedByIdProv');
		}

		return $this;
	}

	/**
	 * Use the CiudadRelatedByIdProv relation Ciudad object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CiudadQuery A secondary query class using the current class as primary query
	 */
	public function useCiudadRelatedByIdProvQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCiudadRelatedByIdProv($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'CiudadRelatedByIdProv', 'CiudadQuery');
	}

	/**
	 * Filter the query by a related Ciudad object
	 *
	 * @param     Ciudad|PropelCollection $ciudad The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByCiudadRelatedByIdCiudad($ciudad, $comparison = null)
	{
		if ($ciudad instanceof Ciudad) {
			return $this
				->addUsingAlias(ClientePeer::ID_CIUDAD, $ciudad->getIdciudad(), $comparison);
		} elseif ($ciudad instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(ClientePeer::ID_CIUDAD, $ciudad->toKeyValue('PrimaryKey', 'Idciudad'), $comparison);
		} else {
			throw new PropelException('filterByCiudadRelatedByIdCiudad() only accepts arguments of type Ciudad or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the CiudadRelatedByIdCiudad relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function joinCiudadRelatedByIdCiudad($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('CiudadRelatedByIdCiudad');

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
			$this->addJoinObject($join, 'CiudadRelatedByIdCiudad');
		}

		return $this;
	}

	/**
	 * Use the CiudadRelatedByIdCiudad relation Ciudad object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CiudadQuery A secondary query class using the current class as primary query
	 */
	public function useCiudadRelatedByIdCiudadQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCiudadRelatedByIdCiudad($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'CiudadRelatedByIdCiudad', 'CiudadQuery');
	}

	/**
	 * Filter the query by a related Venta object
	 *
	 * @param     Venta $venta  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByVenta($venta, $comparison = null)
	{
		if ($venta instanceof Venta) {
			return $this
				->addUsingAlias(ClientePeer::ID_CLIE, $venta->getIdcliente(), $comparison);
		} elseif ($venta instanceof PropelCollection) {
			return $this
				->useVentaQuery()
				->filterByPrimaryKeys($venta->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByVenta() only accepts arguments of type Venta or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Venta relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function joinVenta($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Venta');

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
			$this->addJoinObject($join, 'Venta');
		}

		return $this;
	}

	/**
	 * Use the Venta relation Venta object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    VentaQuery A secondary query class using the current class as primary query
	 */
	public function useVentaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinVenta($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Venta', 'VentaQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Cliente $cliente Object to remove from the list of results
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function prune($cliente = null)
	{
		if ($cliente) {
			$this->addUsingAlias(ClientePeer::ID_CLIE, $cliente->getIdClie(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseClienteQuery