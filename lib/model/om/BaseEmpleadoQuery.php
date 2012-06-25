<?php


/**
 * Base class that represents a query for the 'empleado' table.
 *
 * 
 *
 * @method     EmpleadoQuery orderByIdEmp($order = Criteria::ASC) Order by the id_emp column
 * @method     EmpleadoQuery orderByApellido($order = Criteria::ASC) Order by the apellido column
 * @method     EmpleadoQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method     EmpleadoQuery orderByUser($order = Criteria::ASC) Order by the user column
 * @method     EmpleadoQuery orderByPass($order = Criteria::ASC) Order by the pass column
 * @method     EmpleadoQuery orderByMail($order = Criteria::ASC) Order by the mail column
 * @method     EmpleadoQuery orderByIdCiudad($order = Criteria::ASC) Order by the id_ciudad column
 * @method     EmpleadoQuery orderByIdProv($order = Criteria::ASC) Order by the id_prov column
 * @method     EmpleadoQuery orderByIdprivilegio($order = Criteria::ASC) Order by the idprivilegio column
 * @method     EmpleadoQuery orderByHabilitado($order = Criteria::ASC) Order by the habilitado column
 *
 * @method     EmpleadoQuery groupByIdEmp() Group by the id_emp column
 * @method     EmpleadoQuery groupByApellido() Group by the apellido column
 * @method     EmpleadoQuery groupByNombre() Group by the nombre column
 * @method     EmpleadoQuery groupByUser() Group by the user column
 * @method     EmpleadoQuery groupByPass() Group by the pass column
 * @method     EmpleadoQuery groupByMail() Group by the mail column
 * @method     EmpleadoQuery groupByIdCiudad() Group by the id_ciudad column
 * @method     EmpleadoQuery groupByIdProv() Group by the id_prov column
 * @method     EmpleadoQuery groupByIdprivilegio() Group by the idprivilegio column
 * @method     EmpleadoQuery groupByHabilitado() Group by the habilitado column
 *
 * @method     EmpleadoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     EmpleadoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     EmpleadoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     EmpleadoQuery leftJoinCiudadRelatedByIdCiudad($relationAlias = null) Adds a LEFT JOIN clause to the query using the CiudadRelatedByIdCiudad relation
 * @method     EmpleadoQuery rightJoinCiudadRelatedByIdCiudad($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CiudadRelatedByIdCiudad relation
 * @method     EmpleadoQuery innerJoinCiudadRelatedByIdCiudad($relationAlias = null) Adds a INNER JOIN clause to the query using the CiudadRelatedByIdCiudad relation
 *
 * @method     EmpleadoQuery leftJoinCiudadRelatedByIdProv($relationAlias = null) Adds a LEFT JOIN clause to the query using the CiudadRelatedByIdProv relation
 * @method     EmpleadoQuery rightJoinCiudadRelatedByIdProv($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CiudadRelatedByIdProv relation
 * @method     EmpleadoQuery innerJoinCiudadRelatedByIdProv($relationAlias = null) Adds a INNER JOIN clause to the query using the CiudadRelatedByIdProv relation
 *
 * @method     EmpleadoQuery leftJoinPrivilegios($relationAlias = null) Adds a LEFT JOIN clause to the query using the Privilegios relation
 * @method     EmpleadoQuery rightJoinPrivilegios($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Privilegios relation
 * @method     EmpleadoQuery innerJoinPrivilegios($relationAlias = null) Adds a INNER JOIN clause to the query using the Privilegios relation
 *
 * @method     Empleado findOne(PropelPDO $con = null) Return the first Empleado matching the query
 * @method     Empleado findOneOrCreate(PropelPDO $con = null) Return the first Empleado matching the query, or a new Empleado object populated from the query conditions when no match is found
 *
 * @method     Empleado findOneByIdEmp(int $id_emp) Return the first Empleado filtered by the id_emp column
 * @method     Empleado findOneByApellido(string $apellido) Return the first Empleado filtered by the apellido column
 * @method     Empleado findOneByNombre(string $nombre) Return the first Empleado filtered by the nombre column
 * @method     Empleado findOneByUser(string $user) Return the first Empleado filtered by the user column
 * @method     Empleado findOneByPass(string $pass) Return the first Empleado filtered by the pass column
 * @method     Empleado findOneByMail(string $mail) Return the first Empleado filtered by the mail column
 * @method     Empleado findOneByIdCiudad(int $id_ciudad) Return the first Empleado filtered by the id_ciudad column
 * @method     Empleado findOneByIdProv(int $id_prov) Return the first Empleado filtered by the id_prov column
 * @method     Empleado findOneByIdprivilegio(int $idprivilegio) Return the first Empleado filtered by the idprivilegio column
 * @method     Empleado findOneByHabilitado(int $habilitado) Return the first Empleado filtered by the habilitado column
 *
 * @method     array findByIdEmp(int $id_emp) Return Empleado objects filtered by the id_emp column
 * @method     array findByApellido(string $apellido) Return Empleado objects filtered by the apellido column
 * @method     array findByNombre(string $nombre) Return Empleado objects filtered by the nombre column
 * @method     array findByUser(string $user) Return Empleado objects filtered by the user column
 * @method     array findByPass(string $pass) Return Empleado objects filtered by the pass column
 * @method     array findByMail(string $mail) Return Empleado objects filtered by the mail column
 * @method     array findByIdCiudad(int $id_ciudad) Return Empleado objects filtered by the id_ciudad column
 * @method     array findByIdProv(int $id_prov) Return Empleado objects filtered by the id_prov column
 * @method     array findByIdprivilegio(int $idprivilegio) Return Empleado objects filtered by the idprivilegio column
 * @method     array findByHabilitado(int $habilitado) Return Empleado objects filtered by the habilitado column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseEmpleadoQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseEmpleadoQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Empleado', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new EmpleadoQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    EmpleadoQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof EmpleadoQuery) {
			return $criteria;
		}
		$query = new EmpleadoQuery();
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
	 * @return    Empleado|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = EmpleadoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(EmpleadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Empleado A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_EMP`, `APELLIDO`, `NOMBRE`, `USER`, `PASS`, `MAIL`, `ID_CIUDAD`, `ID_PROV`, `IDPRIVILEGIO`, `HABILITADO` FROM `empleado` WHERE `ID_EMP` = :p0';
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
			$obj = new Empleado();
			$obj->hydrate($row);
			EmpleadoPeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    Empleado|array|mixed the result, formatted by the current formatter
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
	 * @return    EmpleadoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(EmpleadoPeer::ID_EMP, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    EmpleadoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(EmpleadoPeer::ID_EMP, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_emp column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdEmp(1234); // WHERE id_emp = 1234
	 * $query->filterByIdEmp(array(12, 34)); // WHERE id_emp IN (12, 34)
	 * $query->filterByIdEmp(array('min' => 12)); // WHERE id_emp > 12
	 * </code>
	 *
	 * @param     mixed $idEmp The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmpleadoQuery The current query, for fluid interface
	 */
	public function filterByIdEmp($idEmp = null, $comparison = null)
	{
		if (is_array($idEmp) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(EmpleadoPeer::ID_EMP, $idEmp, $comparison);
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
	 * @return    EmpleadoQuery The current query, for fluid interface
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
		return $this->addUsingAlias(EmpleadoPeer::APELLIDO, $apellido, $comparison);
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
	 * @return    EmpleadoQuery The current query, for fluid interface
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
		return $this->addUsingAlias(EmpleadoPeer::NOMBRE, $nombre, $comparison);
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
	 * @return    EmpleadoQuery The current query, for fluid interface
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
		return $this->addUsingAlias(EmpleadoPeer::USER, $user, $comparison);
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
	 * @return    EmpleadoQuery The current query, for fluid interface
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
		return $this->addUsingAlias(EmpleadoPeer::PASS, $pass, $comparison);
	}

	/**
	 * Filter the query on the mail column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByMail('fooValue');   // WHERE mail = 'fooValue'
	 * $query->filterByMail('%fooValue%'); // WHERE mail LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $mail The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmpleadoQuery The current query, for fluid interface
	 */
	public function filterByMail($mail = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($mail)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $mail)) {
				$mail = str_replace('*', '%', $mail);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(EmpleadoPeer::MAIL, $mail, $comparison);
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
	 * @return    EmpleadoQuery The current query, for fluid interface
	 */
	public function filterByIdCiudad($idCiudad = null, $comparison = null)
	{
		if (is_array($idCiudad)) {
			$useMinMax = false;
			if (isset($idCiudad['min'])) {
				$this->addUsingAlias(EmpleadoPeer::ID_CIUDAD, $idCiudad['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCiudad['max'])) {
				$this->addUsingAlias(EmpleadoPeer::ID_CIUDAD, $idCiudad['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(EmpleadoPeer::ID_CIUDAD, $idCiudad, $comparison);
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
	 * @return    EmpleadoQuery The current query, for fluid interface
	 */
	public function filterByIdProv($idProv = null, $comparison = null)
	{
		if (is_array($idProv)) {
			$useMinMax = false;
			if (isset($idProv['min'])) {
				$this->addUsingAlias(EmpleadoPeer::ID_PROV, $idProv['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idProv['max'])) {
				$this->addUsingAlias(EmpleadoPeer::ID_PROV, $idProv['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(EmpleadoPeer::ID_PROV, $idProv, $comparison);
	}

	/**
	 * Filter the query on the idprivilegio column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdprivilegio(1234); // WHERE idprivilegio = 1234
	 * $query->filterByIdprivilegio(array(12, 34)); // WHERE idprivilegio IN (12, 34)
	 * $query->filterByIdprivilegio(array('min' => 12)); // WHERE idprivilegio > 12
	 * </code>
	 *
	 * @see       filterByPrivilegios()
	 *
	 * @param     mixed $idprivilegio The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmpleadoQuery The current query, for fluid interface
	 */
	public function filterByIdprivilegio($idprivilegio = null, $comparison = null)
	{
		if (is_array($idprivilegio)) {
			$useMinMax = false;
			if (isset($idprivilegio['min'])) {
				$this->addUsingAlias(EmpleadoPeer::IDPRIVILEGIO, $idprivilegio['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idprivilegio['max'])) {
				$this->addUsingAlias(EmpleadoPeer::IDPRIVILEGIO, $idprivilegio['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(EmpleadoPeer::IDPRIVILEGIO, $idprivilegio, $comparison);
	}

	/**
	 * Filter the query on the habilitado column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByHabilitado(1234); // WHERE habilitado = 1234
	 * $query->filterByHabilitado(array(12, 34)); // WHERE habilitado IN (12, 34)
	 * $query->filterByHabilitado(array('min' => 12)); // WHERE habilitado > 12
	 * </code>
	 *
	 * @param     mixed $habilitado The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmpleadoQuery The current query, for fluid interface
	 */
	public function filterByHabilitado($habilitado = null, $comparison = null)
	{
		if (is_array($habilitado)) {
			$useMinMax = false;
			if (isset($habilitado['min'])) {
				$this->addUsingAlias(EmpleadoPeer::HABILITADO, $habilitado['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($habilitado['max'])) {
				$this->addUsingAlias(EmpleadoPeer::HABILITADO, $habilitado['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(EmpleadoPeer::HABILITADO, $habilitado, $comparison);
	}

	/**
	 * Filter the query by a related Ciudad object
	 *
	 * @param     Ciudad|PropelCollection $ciudad The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmpleadoQuery The current query, for fluid interface
	 */
	public function filterByCiudadRelatedByIdCiudad($ciudad, $comparison = null)
	{
		if ($ciudad instanceof Ciudad) {
			return $this
				->addUsingAlias(EmpleadoPeer::ID_CIUDAD, $ciudad->getIdciudad(), $comparison);
		} elseif ($ciudad instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(EmpleadoPeer::ID_CIUDAD, $ciudad->toKeyValue('PrimaryKey', 'Idciudad'), $comparison);
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
	 * @return    EmpleadoQuery The current query, for fluid interface
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
	 * Filter the query by a related Ciudad object
	 *
	 * @param     Ciudad|PropelCollection $ciudad The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmpleadoQuery The current query, for fluid interface
	 */
	public function filterByCiudadRelatedByIdProv($ciudad, $comparison = null)
	{
		if ($ciudad instanceof Ciudad) {
			return $this
				->addUsingAlias(EmpleadoPeer::ID_PROV, $ciudad->getIdProvincia(), $comparison);
		} elseif ($ciudad instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(EmpleadoPeer::ID_PROV, $ciudad->toKeyValue('PrimaryKey', 'IdProvincia'), $comparison);
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
	 * @return    EmpleadoQuery The current query, for fluid interface
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
	 * Filter the query by a related Privilegios object
	 *
	 * @param     Privilegios|PropelCollection $privilegios The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmpleadoQuery The current query, for fluid interface
	 */
	public function filterByPrivilegios($privilegios, $comparison = null)
	{
		if ($privilegios instanceof Privilegios) {
			return $this
				->addUsingAlias(EmpleadoPeer::IDPRIVILEGIO, $privilegios->getIdprivilegios(), $comparison);
		} elseif ($privilegios instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(EmpleadoPeer::IDPRIVILEGIO, $privilegios->toKeyValue('PrimaryKey', 'Idprivilegios'), $comparison);
		} else {
			throw new PropelException('filterByPrivilegios() only accepts arguments of type Privilegios or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Privilegios relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    EmpleadoQuery The current query, for fluid interface
	 */
	public function joinPrivilegios($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Privilegios');

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
			$this->addJoinObject($join, 'Privilegios');
		}

		return $this;
	}

	/**
	 * Use the Privilegios relation Privilegios object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PrivilegiosQuery A secondary query class using the current class as primary query
	 */
	public function usePrivilegiosQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPrivilegios($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Privilegios', 'PrivilegiosQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Empleado $empleado Object to remove from the list of results
	 *
	 * @return    EmpleadoQuery The current query, for fluid interface
	 */
	public function prune($empleado = null)
	{
		if ($empleado) {
			$this->addUsingAlias(EmpleadoPeer::ID_EMP, $empleado->getIdEmp(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseEmpleadoQuery