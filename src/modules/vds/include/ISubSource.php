<?php

/**
 * @author Michal Prochazka
 */
interface ISubSource
{
    /**
     * Get the definitions from the subsource and store them
     * Param: array of objects SubSourceDef
     */
    public function retrieveVulnerabilities();

    public function getName();

    public function getType();

    public function getId();

    public function setId($val);

    public function getSubSourceDefs();

    public function addSubSourceDef(ISubSourceDef $subSourceDef);

    public function removeSubSourceDef(ISubSourceDef $subSourceDef);

    public function processAdvisories($contents, $subSourceDef_id);
}
