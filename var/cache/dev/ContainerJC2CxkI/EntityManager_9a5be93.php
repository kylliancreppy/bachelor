<?php

namespace ContainerJC2CxkI;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere935b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0694e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties630bd = [
        
    ];

    public function getConnection()
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'getConnection', array(), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'getMetadataFactory', array(), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'getExpressionBuilder', array(), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'beginTransaction', array(), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'getCache', array(), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'transactional', array('func' => $func), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'commit', array(), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->commit();
    }

    public function rollback()
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'rollback', array(), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'getClassMetadata', array('className' => $className), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'createQuery', array('dql' => $dql), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'createNamedQuery', array('name' => $name), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'createQueryBuilder', array(), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'flush', array('entity' => $entity), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'clear', array('entityName' => $entityName), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->clear($entityName);
    }

    public function close()
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'close', array(), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->close();
    }

    public function persist($entity)
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'persist', array('entity' => $entity), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'remove', array('entity' => $entity), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'refresh', array('entity' => $entity), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'detach', array('entity' => $entity), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'merge', array('entity' => $entity), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'contains', array('entity' => $entity), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'getEventManager', array(), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'getConfiguration', array(), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'isOpen', array(), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'getUnitOfWork', array(), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'getProxyFactory', array(), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'initializeObject', array('obj' => $obj), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'getFilters', array(), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'isFiltersStateClean', array(), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'hasFilters', array(), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return $this->valueHoldere935b->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer0694e = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldere935b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere935b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere935b->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, '__get', ['name' => $name], $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        if (isset(self::$publicProperties630bd[$name])) {
            return $this->valueHoldere935b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere935b;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere935b;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere935b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere935b;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, '__isset', array('name' => $name), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere935b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere935b;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, '__unset', array('name' => $name), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere935b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere935b;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, '__clone', array(), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        $this->valueHoldere935b = clone $this->valueHoldere935b;
    }

    public function __sleep()
    {
        $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, '__sleep', array(), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;

        return array('valueHoldere935b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0694e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0694e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0694e && ($this->initializer0694e->__invoke($valueHoldere935b, $this, 'initializeProxy', array(), $this->initializer0694e) || 1) && $this->valueHoldere935b = $valueHoldere935b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere935b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere935b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
