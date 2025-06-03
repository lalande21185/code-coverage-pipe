# Bitbucket PHP code coverage pipe

## Description
This repository is for a Bitbucket pipe. It is meant to be used in combination with 
the [Bitbucket app](https://github.com/lalande21185/code-coverage-app).

It computes your test code coverage and sends it to the app so you can view it directly in Bitbucket.
## Prerequisites

- Have the [Bitbucket app](https://github.com/lalande21185/code-coverage-app) installed
- Use PHP
- Use PHPUnit for your tests

## What does the pipe do?

See `pipe.sh`

1. Runs your tests with a coverage report
2. Extracts the coverage figure from the report
3. Sends the coverage figure for the branch to the Bitbucket app

## Pipe public build

https://hub.docker.com/r/lalande300/code-coverage-pipe

## Use

In your Bitbucket pipeline:

```
script:
  - pipe: lalande300/code-coverage-pipe:1.0.1
    variables:
      APP_URL: $APP_URL
```

`$APP_URL` is provided by the Bitbucket app in the main view of your repository.

Please read the Bitbucket documentation about pipes.

### Installing

If you want to build it yourself:

1. Clone the repository
2. Build the Docker image
3. Publish the image
4. Use the pipe

## Help

Please contact me if you need help setting it up or getting it to work.

## Contributing

All contributions are welcome. Please try to contact me first.

## Author

[lalande21185](https://github.com/lalande21185)

## License

Licensed under the GPLv3. See the LICENSE file for details.

Copyright 2025 [lalande21185](https://github.com/lalande21185)