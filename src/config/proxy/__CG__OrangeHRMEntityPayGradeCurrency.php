<?php

namespace DoctrineProxies\__CG__\OrangeHRM\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PayGradeCurrency extends \OrangeHRM\Entity\PayGradeCurrency implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'OrangeHRM\\Entity\\PayGradeCurrency' . "\0" . 'payGrade', '' . "\0" . 'OrangeHRM\\Entity\\PayGradeCurrency' . "\0" . 'currencyType', '' . "\0" . 'OrangeHRM\\Entity\\PayGradeCurrency' . "\0" . 'minSalary', '' . "\0" . 'OrangeHRM\\Entity\\PayGradeCurrency' . "\0" . 'maxSalary', '' . "\0" . 'OrangeHRM\\Entity\\PayGradeCurrency' . "\0" . 'payGradeId', '' . "\0" . 'OrangeHRM\\Entity\\PayGradeCurrency' . "\0" . 'currencyId'];
        }

        return ['__isInitialized__', '' . "\0" . 'OrangeHRM\\Entity\\PayGradeCurrency' . "\0" . 'payGrade', '' . "\0" . 'OrangeHRM\\Entity\\PayGradeCurrency' . "\0" . 'currencyType', '' . "\0" . 'OrangeHRM\\Entity\\PayGradeCurrency' . "\0" . 'minSalary', '' . "\0" . 'OrangeHRM\\Entity\\PayGradeCurrency' . "\0" . 'maxSalary', '' . "\0" . 'OrangeHRM\\Entity\\PayGradeCurrency' . "\0" . 'payGradeId', '' . "\0" . 'OrangeHRM\\Entity\\PayGradeCurrency' . "\0" . 'currencyId'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PayGradeCurrency $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getCurrencyId(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurrencyId', []);

        return parent::getCurrencyId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCurrencyId(string $currencyId): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrencyId', [$currencyId]);

        parent::setCurrencyId($currencyId);
    }

    /**
     * {@inheritDoc}
     */
    public function getPayGradeId(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPayGradeId', []);

        return parent::getPayGradeId();
    }

    /**
     * {@inheritDoc}
     */
    public function setPayGradeId(int $payGradeId): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPayGradeId', [$payGradeId]);

        parent::setPayGradeId($payGradeId);
    }

    /**
     * {@inheritDoc}
     */
    public function getPayGrade(): \OrangeHRM\Entity\PayGrade
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPayGrade', []);

        return parent::getPayGrade();
    }

    /**
     * {@inheritDoc}
     */
    public function setPayGrade(\OrangeHRM\Entity\PayGrade $payGrade): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPayGrade', [$payGrade]);

        parent::setPayGrade($payGrade);
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrencyType(): \OrangeHRM\Entity\CurrencyType
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurrencyType', []);

        return parent::getCurrencyType();
    }

    /**
     * {@inheritDoc}
     */
    public function setCurrencyType(\OrangeHRM\Entity\CurrencyType $currencyType): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrencyType', [$currencyType]);

        parent::setCurrencyType($currencyType);
    }

    /**
     * {@inheritDoc}
     */
    public function getMinSalary(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMinSalary', []);

        return parent::getMinSalary();
    }

    /**
     * {@inheritDoc}
     */
    public function setMinSalary(?float $minSalary): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMinSalary', [$minSalary]);

        parent::setMinSalary($minSalary);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaxSalary(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaxSalary', []);

        return parent::getMaxSalary();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaxSalary(?float $maxSalary): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaxSalary', [$maxSalary]);

        parent::setMaxSalary($maxSalary);
    }

}
