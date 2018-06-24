<?php

namespace SetBased\Abc\Request;

/**
 * Interface for classes providing information about an HTTP request.
 */
interface Request
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the method of the current request.
   *
   * @return string
   *
   * @api
   * @since 1.0.0
   */
  public function getMethod(): string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the requested relative URL after. It includes the query part if any.
   *
   * @return string
   *
   * @api
   * @since 1.0.0
   */
  public function getRequestUri(): string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns true if this is an AJAX (XMLHttpRequest) request. Otherwise returns false.
   *
   * @return bool
   *
   * @api
   * @since 1.0.0
   */
  public function isAjax(): bool;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns true if this is a DELETE request. Otherwise returns false.
   *
   * @return bool
   *
   * @api
   * @since 1.0.0
   */
  public function isDelete(): bool;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns true if the current environment is a development environment.
   *
   * @return bool
   */
  public function isEnvDev(): bool;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns true if the current environment is a production environment.
   *
   * @return bool
   */
  public function isEnvProd(): bool;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns true if this is a GET request. Otherwise returns false.
   *
   * @return bool
   *
   * @api
   * @since 1.0.0
   */
  public function isGet(): bool;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns true if this is a HEAD request. Otherwise returns false.
   *
   * @return bool
   *
   * @api
   * @since 1.0.0
   */
  public function isHead(): bool;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns true if this is a OPTIONS request. Otherwise returns false.
   *
   * @return bool
   *
   * @api
   * @since 1.0.0
   */
  public function isOptions(): bool;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns true if this is a PATCH request. Otherwise returns false.
   *
   * @return bool
   *
   * @api
   * @since 1.0.0
   */
  public function isPatch(): bool;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns true if this is a POST request. Otherwise returns false.
   *
   * @return bool
   *
   * @api
   * @since 1.0.0
   */
  public function isPost(): bool;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns true if this is a PUT request. Otherwise returns false.
   *
   * @return bool
   *
   * @api
   * @since 1.0.0
   */
  public function isPut(): bool;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
