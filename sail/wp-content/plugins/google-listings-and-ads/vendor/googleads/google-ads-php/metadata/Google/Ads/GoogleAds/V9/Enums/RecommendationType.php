<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/enums/recommendation_type.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V9\Enums;

class RecommendationType
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
7google/ads/googleads/v9/enums/recommendation_type.protogoogle.ads.googleads.v9.enums"�
RecommendationTypeEnum"�
RecommendationType
UNSPECIFIED 
UNKNOWN
CAMPAIGN_BUDGET
KEYWORD
TEXT_AD
TARGET_CPA_OPT_IN
MAXIMIZE_CONVERSIONS_OPT_IN
ENHANCED_CPC_OPT_IN
SEARCH_PARTNERS_OPT_IN
MAXIMIZE_CLICKS_OPT_IN	
OPTIMIZE_AD_ROTATION

CALLOUT_EXTENSION
SITELINK_EXTENSION
CALL_EXTENSION
KEYWORD_MATCH_TYPE
MOVE_UNUSED_BUDGET
FORECASTING_CAMPAIGN_BUDGET
TARGET_ROAS_OPT_IN
RESPONSIVE_SEARCH_AD 
MARGINAL_ROI_CAMPAIGN_BUDGETB�
!com.google.ads.googleads.v9.enumsBRecommendationTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

