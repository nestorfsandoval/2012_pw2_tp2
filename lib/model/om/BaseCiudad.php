<?php


/**
 * Base class that represents a row from the 'ciudad' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCiudad extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'CiudadPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        CiudadPeer
	 */
	protected static $peer;

	/**
	 * The flag var to prevent infinit loop in deep copy
	 * @var       boolean
	 */
	protected $startCopy = false;

	/**
	 * The value for the idciudad field.
	 * @var        int
	 */
	protected $idciudad;

	/**
	 * The value for the id_provincia field.
	 * @var        int
	 */
	protected $id_provincia;

	/**
	 * The value for the nomciudad field.
	 * @var        string
	 */
	protected $nomciudad;

	/**
	 * The value for the cp field.
	 * @var        string
	 */
	protected $cp;

	/**
	 * @var        Provincia
	 */
	protected $aProvincia;

	/**
	 * @var        array Cliente[] Collection to store aggregation of Cliente objects.
	 */
	protected $collClientesRelatedByIdProv;

	/**
	 * @var        array Cliente[] Collection to store aggregation of Cliente objects.
	 */
	protected $collClientesRelatedByIdCiudad;

	/**
	 * @var        array Empleado[] Collection to store aggregation of Empleado objects.
	 */
	protected $collEmpleadosRelatedByIdCiudad;

	/**
	 * @var        array Empleado[] Collection to store aggregation of Empleado objects.
	 */
	protected $collEmpleadosRelatedByIdProv;

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
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $clientesRelatedByIdProvScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $clientesRelatedByIdCiudadScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $empleadosRelatedByIdCiudadScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $empleadosRelatedByIdProvScheduledForDeletion = null;

	/**
	 * Get the [idciudad] column value.
	 * 
	 * @return     int
	 */
	public function getIdciudad()
	{
		return $this->idciudad;
	}

	/**
	 * Get the [id_provincia] column value.
	 * 
	 * @return     int
	 */
	public function getIdProvincia()
	{
		return $this->id_provincia;
	}

	/**
	 * Get the [nomciudad] column value.
	 * 
	 * @return     string
	 */
	public function getNomciudad()
	{
		return $this->nomciudad;
	}

	/**
	 * Get the [cp] column value.
	 * 
	 * @return     string
	 */
	public function getCp()
	{
		return $this->cp;
	}

	/**
	 * Set the value of [idciudad] column.
	 * 
	 * @param      int $v new value
	 * @return     Ciudad The current object (for fluent API support)
	 */
	public function setIdciudad($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->idciudad !== $v) {
			$this->idciudad = $v;
			$this->modifiedColumns[] = CiudadPeer::IDCIUDAD;
		}

		return $this;
	} // setIdciudad()

	/**
	 * Set the value of [id_provincia] column.
	 * 
	 * @param      int $v new value
	 * @return     Ciudad The current object (for fluent API support)
	 */
	public function setIdProvincia($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_provincia !== $v) {
			$this->id_provincia = $v;
			$this->modifiedColumns[] = CiudadPeer::ID_PROVINCIA;
		}

		if ($this->aProvincia !== null && $this->aProvincia->getIdprovincia() !== $v) {
			$this->aProvincia = null;
		}

		return $this;
	} // setIdProvincia()

	/**
	 * Set the value of [nomciudad] column.
	 * 
	 * @param      string $v new value
	 * @return     Ciudad The current object (for fluent API support)
	 */
	public function setNomciudad($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->nomciudad !== $v) {
			$this->nomciudad = $v;
			$this->modifiedColumns[] = CiudadPeer::NOMCIUDAD;
		}

		return $this;
	} // setNomciudad()

	/**
	 * Set the value of [cp] column.
	 * 
	 * @param      string $v new value
	 * @return     Ciudad The current object (for fluent API support)
	 */
	public function setCp($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->cp !== $v) {
			$this->cp = $v;
			$this->modifiedColumns[] = CiudadPeer::CP;
		}

		return $this;
	} // setCp()

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

			$this->idciudad = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_provincia = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->nomciudad = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->cp = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 4; // 4 = CiudadPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Ciudad object", $e);
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

		if ($this->aProvincia !== null && $this->id_provincia !== $this->aProvincia->getIdprovincia()) {
			$this->aProvincia = null;
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
			$con = Propel::getConnection(CiudadPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = CiudadPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aProvincia = null;
			$this->collClientesRelatedByIdProv = null;

			$this->collClientesRelatedByIdCiudad = null;

			$this->collEmpleadosRelatedByIdCiudad = null;

			$this->collEmpleadosRelatedByIdProv = null;

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
			$con = Propel::getConnection(CiudadPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = CiudadQuery::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseCiudad:delete:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseCiudad:delete:post') as $callable)
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
			$con = Propel::getConnection(CiudadPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseCiudad:save:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseCiudad:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				CiudadPeer::addInstanceToPool($this);
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

			if ($this->aProvincia !== null) {
				if ($this->aProvincia->isModified() || $this->aProvincia->isNew()) {
					$affectedRows += $this->aProvincia->save($con);
				}
				$this->setProvincia($this->aProvincia);
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

			if ($this->clientesRelatedByIdProvScheduledForDeletion !== null) {
				if (!$this->clientesRelatedByIdProvScheduledForDeletion->isEmpty()) {
					ClienteQuery::create()
						->filterByPrimaryKeys($this->clientesRelatedByIdProvScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->clientesRelatedByIdProvScheduledForDeletion = null;
				}
			}

			if ($this->collClientesRelatedByIdProv !== null) {
				foreach ($this->collClientesRelatedByIdProv as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->clientesRelatedByIdCiudadScheduledForDeletion !== null) {
				if (!$this->clientesRelatedByIdCiudadScheduledForDeletion->isEmpty()) {
					ClienteQuery::create()
						->filterByPrimaryKeys($this->clientesRelatedByIdCiudadScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->clientesRelatedByIdCiudadScheduledForDeletion = null;
				}
			}

			if ($this->collClientesRelatedByIdCiudad !== null) {
				foreach ($this->collClientesRelatedByIdCiudad as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->empleadosRelatedByIdCiudadScheduledForDeletion !== null) {
				if (!$this->empleadosRelatedByIdCiudadScheduledForDeletion->isEmpty()) {
					EmpleadoQuery::create()
						->filterByPrimaryKeys($this->empleadosRelatedByIdCiudadScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->empleadosRelatedByIdCiudadScheduledForDeletion = null;
				}
			}

			if ($this->collEmpleadosRelatedByIdCiudad !== null) {
				foreach ($this->collEmpleadosRelatedByIdCiudad as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->empleadosRelatedByIdProvScheduledForDeletion !== null) {
				if (!$this->empleadosRelatedByIdProvScheduledForDeletion->isEmpty()) {
					EmpleadoQuery::create()
						->filterByPrimaryKeys($this->empleadosRelatedByIdProvScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->empleadosRelatedByIdProvScheduledForDeletion = null;
				}
			}

			if ($this->collEmpleadosRelatedByIdProv !== null) {
				foreach ($this->collEmpleadosRelatedByIdProv as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
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

		$this->modifiedColumns[] = CiudadPeer::IDCIUDAD;
		if (null !== $this->idciudad) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . CiudadPeer::IDCIUDAD . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(CiudadPeer::IDCIUDAD)) {
			$modifiedColumns[':p' . $index++]  = '`IDCIUDAD`';
		}
		if ($this->isColumnModified(CiudadPeer::ID_PROVINCIA)) {
			$modifiedColumns[':p' . $index++]  = '`ID_PROVINCIA`';
		}
		if ($this->isColumnModified(CiudadPeer::NOMCIUDAD)) {
			$modifiedColumns[':p' . $index++]  = '`NOMCIUDAD`';
		}
		if ($this->isColumnModified(CiudadPeer::CP)) {
			$modifiedColumns[':p' . $index++]  = '`CP`';
		}

		$sql = sprintf(
			'INSERT INTO `ciudad` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`IDCIUDAD`':
						$stmt->bindValue($identifier, $this->idciudad, PDO::PARAM_INT);
						break;
					case '`ID_PROVINCIA`':
						$stmt->bindValue($identifier, $this->id_provincia, PDO::PARAM_INT);
						break;
					case '`NOMCIUDAD`':
						$stmt->bindValue($identifier, $this->nomciudad, PDO::PARAM_STR);
						break;
					case '`CP`':
						$stmt->bindValue($identifier, $this->cp, PDO::PARAM_STR);
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
		$this->setIdciudad($pk);

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

			if ($this->aProvincia !== null) {
				if (!$this->aProvincia->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aProvincia->getValidationFailures());
				}
			}


			if (($retval = CiudadPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collClientesRelatedByIdProv !== null) {
					foreach ($this->collClientesRelatedByIdProv as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collClientesRelatedByIdCiudad !== null) {
					foreach ($this->collClientesRelatedByIdCiudad as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collEmpleadosRelatedByIdCiudad !== null) {
					foreach ($this->collEmpleadosRelatedByIdCiudad as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collEmpleadosRelatedByIdProv !== null) {
					foreach ($this->collEmpleadosRelatedByIdProv as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
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
		$pos = CiudadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdciudad();
				break;
			case 1:
				return $this->getIdProvincia();
				break;
			case 2:
				return $this->getNomciudad();
				break;
			case 3:
				return $this->getCp();
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
		if (isset($alreadyDumpedObjects['Ciudad'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Ciudad'][$this->getPrimaryKey()] = true;
		$keys = CiudadPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdciudad(),
			$keys[1] => $this->getIdProvincia(),
			$keys[2] => $this->getNomciudad(),
			$keys[3] => $this->getCp(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aProvincia) {
				$result['Provincia'] = $this->aProvincia->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->collClientesRelatedByIdProv) {
				$result['ClientesRelatedByIdProv'] = $this->collClientesRelatedByIdProv->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collClientesRelatedByIdCiudad) {
				$result['ClientesRelatedByIdCiudad'] = $this->collClientesRelatedByIdCiudad->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collEmpleadosRelatedByIdCiudad) {
				$result['EmpleadosRelatedByIdCiudad'] = $this->collEmpleadosRelatedByIdCiudad->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collEmpleadosRelatedByIdProv) {
				$result['EmpleadosRelatedByIdProv'] = $this->collEmpleadosRelatedByIdProv->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
		$pos = CiudadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdciudad($value);
				break;
			case 1:
				$this->setIdProvincia($value);
				break;
			case 2:
				$this->setNomciudad($value);
				break;
			case 3:
				$this->setCp($value);
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
		$keys = CiudadPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdciudad($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdProvincia($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setNomciudad($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCp($arr[$keys[3]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(CiudadPeer::DATABASE_NAME);

		if ($this->isColumnModified(CiudadPeer::IDCIUDAD)) $criteria->add(CiudadPeer::IDCIUDAD, $this->idciudad);
		if ($this->isColumnModified(CiudadPeer::ID_PROVINCIA)) $criteria->add(CiudadPeer::ID_PROVINCIA, $this->id_provincia);
		if ($this->isColumnModified(CiudadPeer::NOMCIUDAD)) $criteria->add(CiudadPeer::NOMCIUDAD, $this->nomciudad);
		if ($this->isColumnModified(CiudadPeer::CP)) $criteria->add(CiudadPeer::CP, $this->cp);

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
		$criteria = new Criteria(CiudadPeer::DATABASE_NAME);
		$criteria->add(CiudadPeer::IDCIUDAD, $this->idciudad);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdciudad();
	}

	/**
	 * Generic method to set the primary key (idciudad column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdciudad($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdciudad();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Ciudad (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdProvincia($this->getIdProvincia());
		$copyObj->setNomciudad($this->getNomciudad());
		$copyObj->setCp($this->getCp());

		if ($deepCopy && !$this->startCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);
			// store object hash to prevent cycle
			$this->startCopy = true;

			foreach ($this->getClientesRelatedByIdProv() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addClienteRelatedByIdProv($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getClientesRelatedByIdCiudad() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addClienteRelatedByIdCiudad($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getEmpleadosRelatedByIdCiudad() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addEmpleadoRelatedByIdCiudad($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getEmpleadosRelatedByIdProv() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addEmpleadoRelatedByIdProv($relObj->copy($deepCopy));
				}
			}

			//unflag object copy
			$this->startCopy = false;
		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdciudad(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Ciudad Clone of current object.
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
	 * @return     CiudadPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new CiudadPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Provincia object.
	 *
	 * @param      Provincia $v
	 * @return     Ciudad The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setProvincia(Provincia $v = null)
	{
		if ($v === null) {
			$this->setIdProvincia(NULL);
		} else {
			$this->setIdProvincia($v->getIdprovincia());
		}

		$this->aProvincia = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Provincia object, it will not be re-added.
		if ($v !== null) {
			$v->addCiudad($this);
		}

		return $this;
	}


	/**
	 * Get the associated Provincia object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Provincia The associated Provincia object.
	 * @throws     PropelException
	 */
	public function getProvincia(PropelPDO $con = null)
	{
		if ($this->aProvincia === null && ($this->id_provincia !== null)) {
			$this->aProvincia = ProvinciaQuery::create()->findPk($this->id_provincia, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aProvincia->addCiudads($this);
			 */
		}
		return $this->aProvincia;
	}


	/**
	 * Initializes a collection based on the name of a relation.
	 * Avoids crafting an 'init[$relationName]s' method name
	 * that wouldn't work when StandardEnglishPluralizer is used.
	 *
	 * @param      string $relationName The name of the relation to initialize
	 * @return     void
	 */
	public function initRelation($relationName)
	{
		if ('ClienteRelatedByIdProv' == $relationName) {
			return $this->initClientesRelatedByIdProv();
		}
		if ('ClienteRelatedByIdCiudad' == $relationName) {
			return $this->initClientesRelatedByIdCiudad();
		}
		if ('EmpleadoRelatedByIdCiudad' == $relationName) {
			return $this->initEmpleadosRelatedByIdCiudad();
		}
		if ('EmpleadoRelatedByIdProv' == $relationName) {
			return $this->initEmpleadosRelatedByIdProv();
		}
	}

	/**
	 * Clears out the collClientesRelatedByIdProv collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addClientesRelatedByIdProv()
	 */
	public function clearClientesRelatedByIdProv()
	{
		$this->collClientesRelatedByIdProv = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collClientesRelatedByIdProv collection.
	 *
	 * By default this just sets the collClientesRelatedByIdProv collection to an empty array (like clearcollClientesRelatedByIdProv());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initClientesRelatedByIdProv($overrideExisting = true)
	{
		if (null !== $this->collClientesRelatedByIdProv && !$overrideExisting) {
			return;
		}
		$this->collClientesRelatedByIdProv = new PropelObjectCollection();
		$this->collClientesRelatedByIdProv->setModel('Cliente');
	}

	/**
	 * Gets an array of Cliente objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Ciudad is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Cliente[] List of Cliente objects
	 * @throws     PropelException
	 */
	public function getClientesRelatedByIdProv($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collClientesRelatedByIdProv || null !== $criteria) {
			if ($this->isNew() && null === $this->collClientesRelatedByIdProv) {
				// return empty collection
				$this->initClientesRelatedByIdProv();
			} else {
				$collClientesRelatedByIdProv = ClienteQuery::create(null, $criteria)
					->filterByCiudadRelatedByIdProv($this)
					->find($con);
				if (null !== $criteria) {
					return $collClientesRelatedByIdProv;
				}
				$this->collClientesRelatedByIdProv = $collClientesRelatedByIdProv;
			}
		}
		return $this->collClientesRelatedByIdProv;
	}

	/**
	 * Sets a collection of ClienteRelatedByIdProv objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $clientesRelatedByIdProv A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setClientesRelatedByIdProv(PropelCollection $clientesRelatedByIdProv, PropelPDO $con = null)
	{
		$this->clientesRelatedByIdProvScheduledForDeletion = $this->getClientesRelatedByIdProv(new Criteria(), $con)->diff($clientesRelatedByIdProv);

		foreach ($clientesRelatedByIdProv as $clienteRelatedByIdProv) {
			// Fix issue with collection modified by reference
			if ($clienteRelatedByIdProv->isNew()) {
				$clienteRelatedByIdProv->setCiudadRelatedByIdProv($this);
			}
			$this->addClienteRelatedByIdProv($clienteRelatedByIdProv);
		}

		$this->collClientesRelatedByIdProv = $clientesRelatedByIdProv;
	}

	/**
	 * Returns the number of related Cliente objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Cliente objects.
	 * @throws     PropelException
	 */
	public function countClientesRelatedByIdProv(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collClientesRelatedByIdProv || null !== $criteria) {
			if ($this->isNew() && null === $this->collClientesRelatedByIdProv) {
				return 0;
			} else {
				$query = ClienteQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCiudadRelatedByIdProv($this)
					->count($con);
			}
		} else {
			return count($this->collClientesRelatedByIdProv);
		}
	}

	/**
	 * Method called to associate a Cliente object to this object
	 * through the Cliente foreign key attribute.
	 *
	 * @param      Cliente $l Cliente
	 * @return     Ciudad The current object (for fluent API support)
	 */
	public function addClienteRelatedByIdProv(Cliente $l)
	{
		if ($this->collClientesRelatedByIdProv === null) {
			$this->initClientesRelatedByIdProv();
		}
		if (!$this->collClientesRelatedByIdProv->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddClienteRelatedByIdProv($l);
		}

		return $this;
	}

	/**
	 * @param	ClienteRelatedByIdProv $clienteRelatedByIdProv The clienteRelatedByIdProv object to add.
	 */
	protected function doAddClienteRelatedByIdProv($clienteRelatedByIdProv)
	{
		$this->collClientesRelatedByIdProv[]= $clienteRelatedByIdProv;
		$clienteRelatedByIdProv->setCiudadRelatedByIdProv($this);
	}

	/**
	 * Clears out the collClientesRelatedByIdCiudad collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addClientesRelatedByIdCiudad()
	 */
	public function clearClientesRelatedByIdCiudad()
	{
		$this->collClientesRelatedByIdCiudad = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collClientesRelatedByIdCiudad collection.
	 *
	 * By default this just sets the collClientesRelatedByIdCiudad collection to an empty array (like clearcollClientesRelatedByIdCiudad());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initClientesRelatedByIdCiudad($overrideExisting = true)
	{
		if (null !== $this->collClientesRelatedByIdCiudad && !$overrideExisting) {
			return;
		}
		$this->collClientesRelatedByIdCiudad = new PropelObjectCollection();
		$this->collClientesRelatedByIdCiudad->setModel('Cliente');
	}

	/**
	 * Gets an array of Cliente objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Ciudad is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Cliente[] List of Cliente objects
	 * @throws     PropelException
	 */
	public function getClientesRelatedByIdCiudad($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collClientesRelatedByIdCiudad || null !== $criteria) {
			if ($this->isNew() && null === $this->collClientesRelatedByIdCiudad) {
				// return empty collection
				$this->initClientesRelatedByIdCiudad();
			} else {
				$collClientesRelatedByIdCiudad = ClienteQuery::create(null, $criteria)
					->filterByCiudadRelatedByIdCiudad($this)
					->find($con);
				if (null !== $criteria) {
					return $collClientesRelatedByIdCiudad;
				}
				$this->collClientesRelatedByIdCiudad = $collClientesRelatedByIdCiudad;
			}
		}
		return $this->collClientesRelatedByIdCiudad;
	}

	/**
	 * Sets a collection of ClienteRelatedByIdCiudad objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $clientesRelatedByIdCiudad A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setClientesRelatedByIdCiudad(PropelCollection $clientesRelatedByIdCiudad, PropelPDO $con = null)
	{
		$this->clientesRelatedByIdCiudadScheduledForDeletion = $this->getClientesRelatedByIdCiudad(new Criteria(), $con)->diff($clientesRelatedByIdCiudad);

		foreach ($clientesRelatedByIdCiudad as $clienteRelatedByIdCiudad) {
			// Fix issue with collection modified by reference
			if ($clienteRelatedByIdCiudad->isNew()) {
				$clienteRelatedByIdCiudad->setCiudadRelatedByIdCiudad($this);
			}
			$this->addClienteRelatedByIdCiudad($clienteRelatedByIdCiudad);
		}

		$this->collClientesRelatedByIdCiudad = $clientesRelatedByIdCiudad;
	}

	/**
	 * Returns the number of related Cliente objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Cliente objects.
	 * @throws     PropelException
	 */
	public function countClientesRelatedByIdCiudad(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collClientesRelatedByIdCiudad || null !== $criteria) {
			if ($this->isNew() && null === $this->collClientesRelatedByIdCiudad) {
				return 0;
			} else {
				$query = ClienteQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCiudadRelatedByIdCiudad($this)
					->count($con);
			}
		} else {
			return count($this->collClientesRelatedByIdCiudad);
		}
	}

	/**
	 * Method called to associate a Cliente object to this object
	 * through the Cliente foreign key attribute.
	 *
	 * @param      Cliente $l Cliente
	 * @return     Ciudad The current object (for fluent API support)
	 */
	public function addClienteRelatedByIdCiudad(Cliente $l)
	{
		if ($this->collClientesRelatedByIdCiudad === null) {
			$this->initClientesRelatedByIdCiudad();
		}
		if (!$this->collClientesRelatedByIdCiudad->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddClienteRelatedByIdCiudad($l);
		}

		return $this;
	}

	/**
	 * @param	ClienteRelatedByIdCiudad $clienteRelatedByIdCiudad The clienteRelatedByIdCiudad object to add.
	 */
	protected function doAddClienteRelatedByIdCiudad($clienteRelatedByIdCiudad)
	{
		$this->collClientesRelatedByIdCiudad[]= $clienteRelatedByIdCiudad;
		$clienteRelatedByIdCiudad->setCiudadRelatedByIdCiudad($this);
	}

	/**
	 * Clears out the collEmpleadosRelatedByIdCiudad collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addEmpleadosRelatedByIdCiudad()
	 */
	public function clearEmpleadosRelatedByIdCiudad()
	{
		$this->collEmpleadosRelatedByIdCiudad = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collEmpleadosRelatedByIdCiudad collection.
	 *
	 * By default this just sets the collEmpleadosRelatedByIdCiudad collection to an empty array (like clearcollEmpleadosRelatedByIdCiudad());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initEmpleadosRelatedByIdCiudad($overrideExisting = true)
	{
		if (null !== $this->collEmpleadosRelatedByIdCiudad && !$overrideExisting) {
			return;
		}
		$this->collEmpleadosRelatedByIdCiudad = new PropelObjectCollection();
		$this->collEmpleadosRelatedByIdCiudad->setModel('Empleado');
	}

	/**
	 * Gets an array of Empleado objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Ciudad is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Empleado[] List of Empleado objects
	 * @throws     PropelException
	 */
	public function getEmpleadosRelatedByIdCiudad($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collEmpleadosRelatedByIdCiudad || null !== $criteria) {
			if ($this->isNew() && null === $this->collEmpleadosRelatedByIdCiudad) {
				// return empty collection
				$this->initEmpleadosRelatedByIdCiudad();
			} else {
				$collEmpleadosRelatedByIdCiudad = EmpleadoQuery::create(null, $criteria)
					->filterByCiudadRelatedByIdCiudad($this)
					->find($con);
				if (null !== $criteria) {
					return $collEmpleadosRelatedByIdCiudad;
				}
				$this->collEmpleadosRelatedByIdCiudad = $collEmpleadosRelatedByIdCiudad;
			}
		}
		return $this->collEmpleadosRelatedByIdCiudad;
	}

	/**
	 * Sets a collection of EmpleadoRelatedByIdCiudad objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $empleadosRelatedByIdCiudad A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setEmpleadosRelatedByIdCiudad(PropelCollection $empleadosRelatedByIdCiudad, PropelPDO $con = null)
	{
		$this->empleadosRelatedByIdCiudadScheduledForDeletion = $this->getEmpleadosRelatedByIdCiudad(new Criteria(), $con)->diff($empleadosRelatedByIdCiudad);

		foreach ($empleadosRelatedByIdCiudad as $empleadoRelatedByIdCiudad) {
			// Fix issue with collection modified by reference
			if ($empleadoRelatedByIdCiudad->isNew()) {
				$empleadoRelatedByIdCiudad->setCiudadRelatedByIdCiudad($this);
			}
			$this->addEmpleadoRelatedByIdCiudad($empleadoRelatedByIdCiudad);
		}

		$this->collEmpleadosRelatedByIdCiudad = $empleadosRelatedByIdCiudad;
	}

	/**
	 * Returns the number of related Empleado objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Empleado objects.
	 * @throws     PropelException
	 */
	public function countEmpleadosRelatedByIdCiudad(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collEmpleadosRelatedByIdCiudad || null !== $criteria) {
			if ($this->isNew() && null === $this->collEmpleadosRelatedByIdCiudad) {
				return 0;
			} else {
				$query = EmpleadoQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCiudadRelatedByIdCiudad($this)
					->count($con);
			}
		} else {
			return count($this->collEmpleadosRelatedByIdCiudad);
		}
	}

	/**
	 * Method called to associate a Empleado object to this object
	 * through the Empleado foreign key attribute.
	 *
	 * @param      Empleado $l Empleado
	 * @return     Ciudad The current object (for fluent API support)
	 */
	public function addEmpleadoRelatedByIdCiudad(Empleado $l)
	{
		if ($this->collEmpleadosRelatedByIdCiudad === null) {
			$this->initEmpleadosRelatedByIdCiudad();
		}
		if (!$this->collEmpleadosRelatedByIdCiudad->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddEmpleadoRelatedByIdCiudad($l);
		}

		return $this;
	}

	/**
	 * @param	EmpleadoRelatedByIdCiudad $empleadoRelatedByIdCiudad The empleadoRelatedByIdCiudad object to add.
	 */
	protected function doAddEmpleadoRelatedByIdCiudad($empleadoRelatedByIdCiudad)
	{
		$this->collEmpleadosRelatedByIdCiudad[]= $empleadoRelatedByIdCiudad;
		$empleadoRelatedByIdCiudad->setCiudadRelatedByIdCiudad($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Ciudad is new, it will return
	 * an empty collection; or if this Ciudad has previously
	 * been saved, it will retrieve related EmpleadosRelatedByIdCiudad from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Ciudad.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Empleado[] List of Empleado objects
	 */
	public function getEmpleadosRelatedByIdCiudadJoinPrivilegios($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = EmpleadoQuery::create(null, $criteria);
		$query->joinWith('Privilegios', $join_behavior);

		return $this->getEmpleadosRelatedByIdCiudad($query, $con);
	}

	/**
	 * Clears out the collEmpleadosRelatedByIdProv collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addEmpleadosRelatedByIdProv()
	 */
	public function clearEmpleadosRelatedByIdProv()
	{
		$this->collEmpleadosRelatedByIdProv = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collEmpleadosRelatedByIdProv collection.
	 *
	 * By default this just sets the collEmpleadosRelatedByIdProv collection to an empty array (like clearcollEmpleadosRelatedByIdProv());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initEmpleadosRelatedByIdProv($overrideExisting = true)
	{
		if (null !== $this->collEmpleadosRelatedByIdProv && !$overrideExisting) {
			return;
		}
		$this->collEmpleadosRelatedByIdProv = new PropelObjectCollection();
		$this->collEmpleadosRelatedByIdProv->setModel('Empleado');
	}

	/**
	 * Gets an array of Empleado objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Ciudad is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Empleado[] List of Empleado objects
	 * @throws     PropelException
	 */
	public function getEmpleadosRelatedByIdProv($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collEmpleadosRelatedByIdProv || null !== $criteria) {
			if ($this->isNew() && null === $this->collEmpleadosRelatedByIdProv) {
				// return empty collection
				$this->initEmpleadosRelatedByIdProv();
			} else {
				$collEmpleadosRelatedByIdProv = EmpleadoQuery::create(null, $criteria)
					->filterByCiudadRelatedByIdProv($this)
					->find($con);
				if (null !== $criteria) {
					return $collEmpleadosRelatedByIdProv;
				}
				$this->collEmpleadosRelatedByIdProv = $collEmpleadosRelatedByIdProv;
			}
		}
		return $this->collEmpleadosRelatedByIdProv;
	}

	/**
	 * Sets a collection of EmpleadoRelatedByIdProv objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $empleadosRelatedByIdProv A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setEmpleadosRelatedByIdProv(PropelCollection $empleadosRelatedByIdProv, PropelPDO $con = null)
	{
		$this->empleadosRelatedByIdProvScheduledForDeletion = $this->getEmpleadosRelatedByIdProv(new Criteria(), $con)->diff($empleadosRelatedByIdProv);

		foreach ($empleadosRelatedByIdProv as $empleadoRelatedByIdProv) {
			// Fix issue with collection modified by reference
			if ($empleadoRelatedByIdProv->isNew()) {
				$empleadoRelatedByIdProv->setCiudadRelatedByIdProv($this);
			}
			$this->addEmpleadoRelatedByIdProv($empleadoRelatedByIdProv);
		}

		$this->collEmpleadosRelatedByIdProv = $empleadosRelatedByIdProv;
	}

	/**
	 * Returns the number of related Empleado objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Empleado objects.
	 * @throws     PropelException
	 */
	public function countEmpleadosRelatedByIdProv(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collEmpleadosRelatedByIdProv || null !== $criteria) {
			if ($this->isNew() && null === $this->collEmpleadosRelatedByIdProv) {
				return 0;
			} else {
				$query = EmpleadoQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCiudadRelatedByIdProv($this)
					->count($con);
			}
		} else {
			return count($this->collEmpleadosRelatedByIdProv);
		}
	}

	/**
	 * Method called to associate a Empleado object to this object
	 * through the Empleado foreign key attribute.
	 *
	 * @param      Empleado $l Empleado
	 * @return     Ciudad The current object (for fluent API support)
	 */
	public function addEmpleadoRelatedByIdProv(Empleado $l)
	{
		if ($this->collEmpleadosRelatedByIdProv === null) {
			$this->initEmpleadosRelatedByIdProv();
		}
		if (!$this->collEmpleadosRelatedByIdProv->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddEmpleadoRelatedByIdProv($l);
		}

		return $this;
	}

	/**
	 * @param	EmpleadoRelatedByIdProv $empleadoRelatedByIdProv The empleadoRelatedByIdProv object to add.
	 */
	protected function doAddEmpleadoRelatedByIdProv($empleadoRelatedByIdProv)
	{
		$this->collEmpleadosRelatedByIdProv[]= $empleadoRelatedByIdProv;
		$empleadoRelatedByIdProv->setCiudadRelatedByIdProv($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Ciudad is new, it will return
	 * an empty collection; or if this Ciudad has previously
	 * been saved, it will retrieve related EmpleadosRelatedByIdProv from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Ciudad.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Empleado[] List of Empleado objects
	 */
	public function getEmpleadosRelatedByIdProvJoinPrivilegios($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = EmpleadoQuery::create(null, $criteria);
		$query->joinWith('Privilegios', $join_behavior);

		return $this->getEmpleadosRelatedByIdProv($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->idciudad = null;
		$this->id_provincia = null;
		$this->nomciudad = null;
		$this->cp = null;
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
			if ($this->collClientesRelatedByIdProv) {
				foreach ($this->collClientesRelatedByIdProv as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collClientesRelatedByIdCiudad) {
				foreach ($this->collClientesRelatedByIdCiudad as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collEmpleadosRelatedByIdCiudad) {
				foreach ($this->collEmpleadosRelatedByIdCiudad as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collEmpleadosRelatedByIdProv) {
				foreach ($this->collEmpleadosRelatedByIdProv as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collClientesRelatedByIdProv instanceof PropelCollection) {
			$this->collClientesRelatedByIdProv->clearIterator();
		}
		$this->collClientesRelatedByIdProv = null;
		if ($this->collClientesRelatedByIdCiudad instanceof PropelCollection) {
			$this->collClientesRelatedByIdCiudad->clearIterator();
		}
		$this->collClientesRelatedByIdCiudad = null;
		if ($this->collEmpleadosRelatedByIdCiudad instanceof PropelCollection) {
			$this->collEmpleadosRelatedByIdCiudad->clearIterator();
		}
		$this->collEmpleadosRelatedByIdCiudad = null;
		if ($this->collEmpleadosRelatedByIdProv instanceof PropelCollection) {
			$this->collEmpleadosRelatedByIdProv->clearIterator();
		}
		$this->collEmpleadosRelatedByIdProv = null;
		$this->aProvincia = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string The value of the 'nomCiudad' column
	 */
	public function __toString()
	{
		return (string) $this->getNomciudad();
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseCiudad:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}

		return parent::__call($name, $params);
	}

} // BaseCiudad
