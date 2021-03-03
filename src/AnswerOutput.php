<?php

namespace AnalyzeResponse;

use GuzzleHttp\Client;

class AnswerOutput
{
    private Client $client;
    private string $method;
    private string $uri;

    /**
     * AnswerOutput constructor.
     * @param string $base_uri
     */
    public function __construct(
        public string $base_uri = 'https://google.com'
    )
    {
        $this->client = new Client(['base_uri' => $this->base_uri]);
    }

    /**
     * @param string $method
     */
    public function setMethod(string $method = 'GET')
    {
        $this->method = $method;
    }

    /**
     * @param string $uri
     */
    public function setUri(string $uri = '')
    {
        $this->uri = $uri;
    }

    /**
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getResponse(): array
    {
        $response = $this->client?->request($this->method, $this->uri);

        return $response->getHeaders();
    }
}