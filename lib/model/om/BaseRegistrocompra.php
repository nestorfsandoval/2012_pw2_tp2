<?php


/**
 * Base class that represents a row from the 'registroCompra' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseRegistrocompra extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'RegistrocompraPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        RegistrocompraPeer
	 */
	protected static $peer;

	/**
	 * The flag var to prevent infinit loop in deep copy
	 * @var       boolean
	 */
	protected $startCopy = false;

	/**
	 * The value for the idcompra field.
	 * @var        int
	 */
	protected $idcompra;

	/**
	 * The value for the fecha field.
	 * @var        string
	 */
	protected $fecha;

	/**
	 * The value for the idprovee field.
	 * @var        int
	 */
	protected $idprovee;

	/**
	 * The value for the n_factura field.
	 * @var        string
	 */
	protected $n_factura;

	/**
	 * The value for the valor field.
	 * @var        string
	 */
	protected $valor;

	/**
	 * The value for the remito field.
	 * @var        string
	 */
	protected $remito;

	/**
	 * The value for the idempleado field.
	 * @var        int
	 */
	protected $idempleado;

	/**
	 * @var        Proveedor
	 */
	protected $aProveedor;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Get the [idcompra] column value.
	 * 
	 * @return     int
	 */
	public function getIdcompra()
	{
		return $this->idcompra;
	}

	/**
	 * Get the [optionally formatted] temporal [fecha] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getFecha($format = 'Y-m-d')
	{
		if ($this->fecha === null) {
			return null;
		}


		if ($this->fecha === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->fecha);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->fecha, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [idprovee] column value.
	 * 
	 * @return     int
	 */
	public function getIdprovee()
	{
		return $this->idprovee;
	}

	/**
	 * Get the [n_factura] column value.
	 * 
	 * @return     string
	 */
	public function getNFactura()
	{
		return $this->n_factura;
	}

	/**
	 * Get the [valor] column value.
	 * 
	 * @return     string
	 */
	public function getValor()
	{
		return $this->valor;
	}

	/**
	 * Get the [remito] column value.
	 * 
	 * @return     string
	 */
	public function getRemito()
	{
		return $this->remito;
	}

	/**
	 * Get the [idempleado] column value.
	 * 
	 * @return     int
	 */
	public function getIdempleado()
	{
		return $this->idempleado;
	}

	/**
	 * Set the value of [idcompra] column.
	 * 
	 * @param      int $v new value
	 * @return     Registrocompra The current object (for fluent API support)
	 */
	public function setIdcompra($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->idcompra !== $v) {
			$this->idcompra = $v;
			$this->modifiedColumns[] = RegistrocompraPeer::IDCOMPRA;
		}

		return $this;
	} // setIdcompra()

	/**
	 * Sets the value of [fecha] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Registrocompra The current object (for fluent API support)
	 */
	public function setFecha($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->fecha !== null || $dt !== null) {
			$currentDateAsString = ($this->fecha !== null && $tmpDt = new DateTime($this->fecha)) ? $tmpDt->format('Y-m-d') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->fecha = $newDateAsString;
				$this->modifiedColumns[] = RegistrocompraPeer::FECHA;
			}
		} // if either are not null

		return $this;
	} // setFecha()

	/**
	 * Set the value of [idprovee] column.
	 * 
	 * @param      int $v new value
	 * @return     Registrocompra The current object (for fluent API support)
	 */
	public function setIdprovee($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->idprovee !== $v) {
			$this->idprovee = $v;
			$this->modifiedColumns[] = RegistrocompraPeer::IDPROVEE;
		}

		if ($this->aProveedor !== null && $this->aProveedor->getIdproveedor() !== $v) {
			$this->aProveedor = null;
		}

		return $this;
	} // setIdprovee()

	/**
	 * Set the value of [n_factura] column.
	 * 
	 * @param      string $v new value
	 * @return     Registrocompra The current object (for fluent API support)
	 */
	public function setNFactura($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->n_factura !== $v) {
			$this->n_factura = $v;
			$this->modifiedColumns[] = RegistrocompraPeer::N_FACTURA;
		}

		return $this;
	} // setNFactura()

	/**
	 * Set the value of [valor] column.
	 * 
	 * @param      string $v new value
	 * @return     Registrocompra The current object (for fluent API support)
	 */
	public function setValor($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->valor !== $v) {
			$this->valor = $v;
			$this->modifiedColumns[] = RegistrocompraPeer::VALOR;
		}

		return $this;
	} // setValor()

	/**
	 * Set the value of [remito] column.
	 * 
	 * @param      string $v new value
	 * @return     Registrocompra The current object (for fluent API support)
	 */
	public function setRemito($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->remito !== $v) {
			$this->remito = $v;
			$this->modifiedColumns[] = RegistrocompraPeer::REMITO;
		}

		return $this;
	} // setRemito()

	/**
	 * Set the value of [idempleado] column.
	 * 
	 * @param      int $v new value
	 * @return     Registrocompra The current object (for fluent API support)
	 */
	public function setIdempleado($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->idempleado !== $v) {
			$this->idempleado = $v;
			$this->modifiedColumns[] = RegistrocompraPeer::IDEMPLEADO;
		}

		return $this;
	} // setIdempleado()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->idcompra = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->fecha = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->idprovee = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->n_factura = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->valor = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->remito = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->idempleado = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 7; // 7 = RegistrocompraPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Registrocompra object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

		if ($this->aProveedor !== null && $this->idprovee !== $this->aProveedor->getIdproveedor()) {
			$this->aProveedor = null;
		}
	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(RegistrocompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = RegistrocompraPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aProveedor = null;
		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(RegistrocompraPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = RegistrocompraQuery::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseRegistrocompra:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			    return;
			  }
			}

			if ($ret) {
				$deleteQuery->delete($con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseRegistrocompra:delete:post') as $callable)
				{
				  call_user_func($callable, $this, $con);
				}

				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (Exception $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(RegistrocompraPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseRegistrocompra:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			  	$con->commit();
			    return $affectedRows;
			  }
			}

			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseRegistrocompra:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				RegistrocompraPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (Exception $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aProveedor !== null) {
				if ($this->aProveedor->isModified() || $this->aProveedor->isNew()) {
					$affectedRows += $this->aProveedor->save($con);
				}
				$this->setProveedor($this->aProveedor);
			}

			if ($this->isNew() || $this->isModified()) {
				// persist changes
				if ($this->isNew()) {
					$this->doInsert($con);
				} else {
					$this->doUpdate($con);
				}
				$affectedRows += 1;
				$this->resetModified();
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Insert the row in the database.
	 *
	 * @param      PropelPDO $con
	 *
	 * @throws     PropelException
	 * @see        doSave()
	 */
	protected function doInsert(PropelPDO $con)
	{
		$modifiedColumns = array();
		$index = 0;

		$this->modifiedColumns[] = RegistrocompraPeer::IDCOMPRA;
		if (null !== $this->idcompra) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . RegistrocompraPeer::IDCOMPRA . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(RegistrocompraPeer::IDCOMPRA)) {
			$modifiedColumns[':p' . $index++]  = '`IDCOMPRA`';
		}
		if ($this->isColumnModified(RegistrocompraPeer::FECHA)) {
			$modifiedColumns[':p' . $index++]  = '`FECHA`';
		}
		if ($this->isColumnModified(RegistrocompraPeer::IDPROVEE)) {
			$modifiedColumns[':p' . $index++]  = '`IDPROVEE`';
		}
		if ($this->isColumnModified(RegistrocompraPeer::N_FACTURA)) {
			$modifiedColumns[':p' . $index++]  = '`N_FACTURA`';
		}
		if ($this->isColumnModified(RegistrocompraPeer::VALOR)) {
			$modifiedColumns[':p' . $index++]  = '`VALOR`';
		}
		if ($this->isColumnModified(RegistrocompraPeer::REMITO)) {
			$modifiedColumns[':p' . $index++]  = '`REMITO`';
		}
		if ($this->isColumnModified(RegistrocompraPeer::IDEMPLEADO)) {
			$modifiedColumns[':p' . $index++]  = '`IDEMPLEADO`';
		}

		$sql = sprintf(
			'INSERT INTO `registroCompra` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`IDCOMPRA`':
						$stmt->bindValue($identifier, $this->idcompra, PDO::PARAM_INT);
						break;
					case '`FECHA`':
						$stmt->bindValue($identifier, $this->fecha, PDO::PARAM_STR);
						break;
					case '`IDPROVEE`':
						$stmt->bindValue($identifier, $this->idprovee, PDO::PARAM_INT);
						break;
					case '`N_FACTURA`':
						$stmt->bindValue($identifier, $this->n_factura, PDO::PARAM_STR);
						break;
					case '`VALOR`':
						$stmt->bindValue($identifier, $this->valor, PDO::PARAM_STR);
						break;
					case '`REMITO`':
						$stmt->bindValue($identifier, $this->remito, PDO::PARAM_STR);
						break;
					case '`IDEMPLEADO`':
						$stmt->bindValue($identifier, $this->idempleado, PDO::PARAM_INT);
						break;
				}
			}
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
		}

		try {
			$pk = $con->lastInsertId();
		} catch (Exception $e) {
			throw new PropelException('Unable to get autoincrement id.', $e);
		}
		$this->setIdcompra($pk);

		$this->setNew(false);
	}

	/**
	 * Update the row in the database.
	 *
	 * @param      PropelPDO $con
	 *
	 * @see        doSave()
	 */
	protected function doUpdate(PropelPDO $con)
	{
		$selectCriteria = $this->buildPkeyCriteria();
		$valuesCriteria = $this->buildCriteria();
		BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
	}

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aProveedor !== null) {
				if (!$this->aProveedor->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aProveedor->getValidationFailures());
				}
			}


			if (($retval = RegistrocompraPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = RegistrocompraPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getIdcompra();
				break;
			case 1:
				return $this->getFecha();
				break;
			case 2:
				return $this->getIdprovee();
				break;
			case 3:
				return $this->getNFactura();
				break;
			case 4:
				return $this->getValor();
				break;
			case 5:
				return $this->getRemito();
				break;
			case 6:
				return $this->getIdempleado();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
	 * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
	{
		if (isset($alreadyDumpedObjects['Registrocompra'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Registrocompra'][$this->getPrimaryKey()] = true;
		$keys = RegistrocompraPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdcompra(),
			$keys[1] => $this->getFecha(),
			$keys[2] => $this->getIdprovee(),
			$keys[3] => $this->getNFactura(),
			$keys[4] => $this->getValor(),
			$keys[5] => $this->getRemito(),
			$keys[6] => $this->getIdempleado(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aProveedor) {
				$result['Proveedor'] = $this->aProveedor->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
		}
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = RegistrocompraPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setIdcompra($value);
				break;
			case 1:
				$this->setFecha($value);
				break;
			case 2:
				$this->setIdprovee($value);
				break;
			case 3:
				$this->setNFactura($value);
				break;
			case 4:
				$this->setValor($value);
				break;
			case 5:
				$this->setRemito($value);
				break;
			case 6:
				$this->setIdempleado($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = RegistrocompraPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdcompra($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setFecha($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setIdprovee($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setNFactura($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setValor($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setRemito($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setIdempleado($arr[$keys[6]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(RegistrocompraPeer::DATABASE_NAME);

		if ($this->isColumnModified(RegistrocompraPeer::IDCOMPRA)) $criteria->add(RegistrocompraPeer::IDCOMPRA, $this->idcompra);
		if ($this->isColumnModified(RegistrocompraPeer::FECHA)) $criteria->add(RegistrocompraPeer::FECHA, $this->fecha);
		if ($this->isColumnModified(RegistrocompraPeer::IDPROVEE)) $criteria->add(RegistrocompraPeer::IDPROVEE, $this->idprovee);
		if ($this->isColumnModified(RegistrocompraPeer::N_FACTURA)) $criteria->add(RegistrocompraPeer::N_FACTURA, $this->n_factura);
		if ($this->isColumnModified(RegistrocompraPeer::VALOR)) $criteria->add(RegistrocompraPeer::VALOR, $this->valor);
		if ($this->isColumnModified(RegistrocompraPeer::REMITO)) $criteria->add(RegistrocompraPeer::REMITO, $this->remito);
		if ($this->isColumnModified(RegistrocompraPeer::IDEMPLEADO)) $criteria->add(RegistrocompraPeer::IDEMPLEADO, $this->idempleado);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(RegistrocompraPeer::DATABASE_NAME);
		$criteria->add(RegistrocompraPeer::IDCOMPRA, $this->idcompra);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdcompra();
	}

	/**
	 * Generic method to set the primary key (idcompra column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdcompra($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdcompra();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Registrocompra (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setFecha($this->getFecha());
		$copyObj->setIdprovee($this->getIdprovee());
		$copyObj->setNFactura($this->getNFactura());
		$copyObj->setValor($this->getValor());
		$copyObj->setRemito($this->getRemito());
		$copyObj->setIdempleado($this->getIdempleado());

		if ($deepCopy && !$this->startCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);
			// store object hash to prevent cycle
			$this->startCopy = true;

			//unflag object copy
			$this->startCopy = false;
		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdcompra(NULL); // this is a auto-increment column, so set to default value
		}
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     Registrocompra Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     RegistrocompraPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new RegistrocompraPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Proveedor object.
	 *
	 * @param      Proveedor $v
	 * @return     Registrocompra The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setProveedor(Proveedor $v = null)
	{
		if ($v === null) {
			$this->setIdprovee(NULL);
		} else {
			$this->setIdprovee($v->getIdproveedor());
		}

		$this->aProveedor = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Proveedor object, it will not be re-added.
		if ($v !== null) {
			$v->addRegistrocompra($this);
		}

		return $this;
	}


	/**
	 * Get the associated Proveedor object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Proveedor The associated Proveedor object.
	 * @throws     PropelException
	 */
	public function getProveedor(PropelPDO $con = null)
	{
		if ($this->aProveedor === null && ($this->idprovee !== null)) {
			$this->aProveedor = ProveedorQuery::create()->findPk($this->idprovee, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aProveedor->addRegistrocompras($this);
			 */
		}
		return $this->aProveedor;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->idcompra = null;
		$this->fecha = null;
		$this->idprovee = null;
		$this->n_factura = null;
		$this->valor = null;
		$this->remito = null;
		$this->idempleado = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all references to other model objects or collections of model objects.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect
	 * objects with circular references (even in PHP 5.3). This is currently necessary
	 * when using Propel in certain daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all referrer objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

		$this->aProveedor = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(RegistrocompraPeer::DEFAULT_STRING_FORMAT);
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseRegistrocompra:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}

		return parent::__call($name, $params);
	}

} // BaseRegistrocompra
