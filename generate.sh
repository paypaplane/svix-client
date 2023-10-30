#!/bin/sh
docker run --rm -v ${PWD}:/local openapitools/openapi-generator-cli generate -c /local/spec/config.yaml  -i /local/spec/svix.json -g php -o /local/
