<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property \DTS\eBaySDK\Trading\Types\ApplicationDeliveryPreferencesType $ApplicationDeliveryPreferences
 * @property \DTS\eBaySDK\Trading\Types\NotificationEnableArrayType $UserDeliveryPreferenceArray
 * @property \DTS\eBaySDK\Trading\Types\NotificationUserDataType $UserData
 * @property \DTS\eBaySDK\Trading\Types\NotificationEventPropertyType[] $EventProperty
 * @property string $DeliveryURLName
 */
class SetNotificationPreferencesRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ApplicationDeliveryPreferences' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ApplicationDeliveryPreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ApplicationDeliveryPreferences'
        ],
        'UserDeliveryPreferenceArray' => [
            'type' => 'DTS\eBaySDK\Trading\Types\NotificationEnableArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserDeliveryPreferenceArray'
        ],
        'UserData' => [
            'type' => 'DTS\eBaySDK\Trading\Types\NotificationUserDataType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserData'
        ],
        'EventProperty' => [
            'type' => 'DTS\eBaySDK\Trading\Types\NotificationEventPropertyType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'EventProperty'
        ],
        'DeliveryURLName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeliveryURLName'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'SetNotificationPreferencesRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
