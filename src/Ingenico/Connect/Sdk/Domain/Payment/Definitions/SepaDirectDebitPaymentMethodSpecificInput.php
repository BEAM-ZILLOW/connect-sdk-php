<?php
/*
 * This class was auto-generated from the API references found at
 * https://epayments-api.developer-ingenico.com/s2sapi/v1/
 */
namespace Ingenico\Connect\Sdk\Domain\Payment\Definitions;

use UnexpectedValueException;

/**
 * @package Ingenico\Connect\Sdk\Domain\Payment\Definitions
 */
class SepaDirectDebitPaymentMethodSpecificInput extends AbstractSepaDirectDebitPaymentMethodSpecificInput
{
    /**
     * @var string
     */
    public $dateCollect = null;

    /**
     * @var string
     */
    public $directDebitText = null;

    /**
     * @var bool
     */
    public $isRecurring = null;

    /**
     * @var SepaDirectDebitPaymentProduct771SpecificInput
     */
    public $paymentProduct771SpecificInput = null;

    /**
     * @var string
     */
    public $recurringPaymentSequenceIndicator = null;

    /**
     * @var string
     */
    public $token = null;

    /**
     * @var bool
     */
    public $tokenize = null;

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
    {
        parent::fromObject($object);
        if (property_exists($object, 'dateCollect')) {
            $this->dateCollect = $object->dateCollect;
        }
        if (property_exists($object, 'directDebitText')) {
            $this->directDebitText = $object->directDebitText;
        }
        if (property_exists($object, 'isRecurring')) {
            $this->isRecurring = $object->isRecurring;
        }
        if (property_exists($object, 'paymentProduct771SpecificInput')) {
            if (!is_object($object->paymentProduct771SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct771SpecificInput, true) . '\' is not an object');
            }
            $value = new SepaDirectDebitPaymentProduct771SpecificInput();
            $this->paymentProduct771SpecificInput = $value->fromObject($object->paymentProduct771SpecificInput);
        }
        if (property_exists($object, 'recurringPaymentSequenceIndicator')) {
            $this->recurringPaymentSequenceIndicator = $object->recurringPaymentSequenceIndicator;
        }
        if (property_exists($object, 'token')) {
            $this->token = $object->token;
        }
        if (property_exists($object, 'tokenize')) {
            $this->tokenize = $object->tokenize;
        }
        return $this;
    }
}
