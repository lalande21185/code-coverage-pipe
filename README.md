# Bitbucket PHP code coverage pipe

## Description
This repository contains a Bitbucket pipe intended for use with the
[Bitbucket app](https://github.com/lalande21185/code-coverage-app).

The pipe calculates test code coverage and sends the results to the application, allowing you to view it directly within Bitbucket.

## Prerequisites

- Have the [Bitbucket app](https://github.com/lalande21185/code-coverage-app) installed
- Use PHP
- Use PHPUnit for your tests

## What does the pipe do?

See `pipe.sh`

1. Runs your tests with a coverage report.
2. Extracts the coverage figure from the report.
3. Sends the coverage figure for the branch to the Bitbucket app.

## Pipe public build

https://hub.docker.com/r/lalande300/code-coverage-pipe

## Use

In your Bitbucket pipeline:

```
script:
  - pipe: lalande300/code-coverage-pipe:1.0.2
    variables:
      APP_URL: $APP_URL
```

`$APP_URL` is provided by the Bitbucket app in the main view of your repository.

Please read the [Bitbucket documentation about pipes](https://support.atlassian.com/bitbucket-cloud/docs/use-pipes-in-bitbucket-pipelines/). 

### Installing

If you prefer to build it yourself.

1. Clone the repository.
2. Build the Docker image.
3. Publish the image.
4. Use the pipe.

## Help

Please contact me if you need help setting it up or getting it to work. Open an issue on GitHub.

## Contributing

All contributions are welcome. Please try to contact me first. Open an issue on GitHub.

## Author

[lalande21185](https://github.com/lalande21185)

## License

Licensed under the GPLv3. See the LICENSE file for details.

Copyright 2025 [lalande21185](https://github.com/lalande21185)