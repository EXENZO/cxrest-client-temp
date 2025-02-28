<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Wed, 11 Oct 2023 08:58:06 +0000
 */
abstract class AbstractCRTalentPoolMatchStageLink extends \Carerix\Api\Rest\Entity
{
    public const ENTITY = 'CRTalentPoolMatchStageLink';

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("talentPoolMatchStageLinkID");
        $entityConfiguration->setName("CRTalentPoolMatchStageLink");
    }
}
