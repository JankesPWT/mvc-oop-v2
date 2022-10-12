<?php

namespace app\core\form;
use app\core\Model;

/**
 * 
 * @author Jacek Jankes Polit <jankes@jankes.com.pl>
 * @copyright (c) 2022
 * @package app\core\form
 */
abstract class BaseField
{
    abstract public function renderInput(): string;

    public Model $model;
    public string $attribute;

    /**
     * Field constructor.
     *
     * @param \app\core\Model $model
     * @param string          $attribute
     */
    public function __construct(Model $model, string $attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
    }

    public function __toString()
    {
        return sprintf(
            '<div class="form-group">
                <label>%s</label>
                %s
                <div class="invalid-feedback">
                    %s
                </div>
            </div>',
            $this->model->getLabel($this->attribute),
            $this->renderInput(),
            $this->model->getFirstError($this->attribute)
        );
    }
}