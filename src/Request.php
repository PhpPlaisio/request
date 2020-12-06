<?php
declare(strict_types=1);

namespace Plaisio\Request;

/**
 * Interface providing information about an HTTP request.
 */
interface Request
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the accepted languages by the user agent.
   *
   * @return string|null
   *
   * @api
   * @since 1.0.0
   */
  public function getAcceptLanguage(): ?string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of cookie sent by the user agent.
   *
   * @param string $name The name of the cookie.
   *
   * @return string|null
   *
   * @api
   * @since 1.0.0
   */
  public function getCookie(string $name): ?string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of a mandatory HTTP header sent by the user agent.
   *
   * @param string $header The name of the HTTP header (case insensitive and without leading HTTP_).
   *
   * @return string
   *
   * @api
   * @since 1.0.0
   */
  public function getManHeader(string $header): string;

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
   * Returns the value of an optional HTTP header sent by the user agent.
   *
   * @param string $header The name of the HTTP header (case insensitive and without leading HTTP_).
   *
   * @return string|null
   *
   * @api
   * @since 1.0.0
   */
  public function getOptHeader(string $header): ?string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the URL of the page (if any) which referred the user agent to the current page. This is set by the user
   * agent and cannot be trusted.
   *
   * @return string|null
   *
   * @api
   * @since 1.0.0
   */
  public function getReferrer(): ?string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the remote IP (this is always the next hop, not necessarily the user's IP address).
   *
   * @return string|null
   *
   * @api
   * @since 1.0.0
   */
  public function getRemoteIp(): ?string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the timestamp of the start of the request, with microsecond precision.
   *
   * @return float|null
   *
   * @api
   * @since 1.0.0
   */
  public function getRequestTime(): ?float;

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
   * Returns the user agent.
   *
   * @return string|null
   *
   * @api
   * @since 1.0.0
   */
  public function getUserAgent(): ?string;

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
  /**
   * Whether the request is sent via a secure channel (https).
   *
   * @return bool
   */
  public function isSecureChannel(): bool;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
