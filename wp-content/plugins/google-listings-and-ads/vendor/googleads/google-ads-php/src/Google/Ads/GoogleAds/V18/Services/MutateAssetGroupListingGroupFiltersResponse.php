<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/services/asset_group_listing_group_filter_service.proto

namespace Google\Ads\GoogleAds\V18\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for an asset group listing group filter mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.services.MutateAssetGroupListingGroupFiltersResponse</code>
 */
class MutateAssetGroupListingGroupFiltersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * All results for the mutate.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v18.services.MutateAssetGroupListingGroupFilterResult results = 1;</code>
     */
    private $results;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Ads\GoogleAds\V18\Services\MutateAssetGroupListingGroupFilterResult>|\Google\Protobuf\Internal\RepeatedField $results
     *           All results for the mutate.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Services\AssetGroupListingGroupFilterService::initOnce();
        parent::__construct($data);
    }

    /**
     * All results for the mutate.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v18.services.MutateAssetGroupListingGroupFilterResult results = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * All results for the mutate.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v18.services.MutateAssetGroupListingGroupFilterResult results = 1;</code>
     * @param array<\Google\Ads\GoogleAds\V18\Services\MutateAssetGroupListingGroupFilterResult>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V18\Services\MutateAssetGroupListingGroupFilterResult::class);
        $this->results = $arr;

        return $this;
    }

}

