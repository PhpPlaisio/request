<?php
declare(strict_types=1);

namespace Plaisio\Request;

/**
 * Interface providing information about an HTTP request.
 *
 * @property-read string  $absoluteUrl        The requested absolute URL.
 * @property-read string  $acceptContentType  The content types acceptable by the user agent as sent by the user agent.
 * @property-read array   $acceptContentTypes The content types acceptable by the user agent ordered by the
 *                                            corresponding quality scores.
 * @property-read string  $acceptEncoding     The acceptable encodings by the user agent as sent by the user agent.
 * @property-read array   $acceptEncodings    The acceptable encodings by the user agent sorted by the corresponding
 *                                            quality scores.
 * @property-read string  $acceptLanguage     The languages acceptable by the user agent as sent by the user agent.
 * @property-read array   $acceptLanguages    The languages acceptable by the user agent sorted by preference. The first
 *                                            element is the most preferred language.
 * @property-read string  $baseUrl            The requested relative URL.
 * @property-read ?string $contentType        The content type of the send media type.
 * @property-read bool    $isAjax             Whether this is an AJAX (XMLHttpRequest) request.
 * @property-read bool    $isDelete           Whether this is a DELETE request.
 * @property-read bool    $isEnvDev           Whether the current environment is a development environment.
 * @property-read bool    $isEnvProd          Whether the current environment is a production environment.
 * @property-read bool    $isGet              Whether this is a GET request.
 * @property-read bool    $isHead             Whether this is a HEAD request.
 * @property-read bool    $isOptions          Whether this is a OPTIONS request.
 * @property-read bool    $isPatch            Whether this is a PATCH request.
 * @property-read bool    $isPost             Whether this is a POST request.
 * @property-read bool    $isPut              Whether this is a PUT request.
 * @property-read bool    $isSecureChannel    Whether the request is sent via a secure channel (https).
 * @property-read string  $hostname           The hostname of the requested URL.
 * @property-read string  $method             The method of the request.
 * @property-read int     $port               The port to which the request was made.
 * @property-read ?string $referrer           The URL of the page (if any) which referred the user agent to the current
 *                                            page. This is set by the user agent and cannot be trusted.
 * @property-read ?string $remoteIp           The remote IP (this is always the next hop, not necessarily the user's IP
 *                                            address).
 * @property-read ?float  $requestTime        The timestamp of the start of the request, with microsecond precision.
 * @property-read string  $requestUri         The requested relative URL after. It includes the query part if any.
 * @property-read array   $secureHeaders      The lists of headers that are, by default, subject to the trusted host
 *                                            configuration.
 * @property-read ?string $userAgent          The user agent.
 */
interface Request
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * The default port for unencrypted connections.
   */
  public const int HTTP_PORT = 80;

  /**
   * The default port for encrypted connections.
   */
  public const int HTTPS_PORT = 443;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of a cookie sent by the user agent.
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
   * @param string $header The name of the HTTP header (case-insensitive and without leading HTTP_).
   *
   * @return string
   *
   * @api
   * @since 1.0.0
   */
  public function getManHeader(string $header): string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of an optional HTTP header sent by the user agent.
   *
   * @param string $header The name of the HTTP header (case-insensitive and without leading HTTP_).
   *
   * @return string|null
   *
   * @api
   * @since 1.0.0
   */
  public function getOptHeader(string $header): ?string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Validates the request headers. A BadRequestException must be thrown if the request headers are invalid.
   */
  public function validate(): void;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
