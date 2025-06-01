# Bitbucket PHP code coverage pipe

## Description
This repository is for a Bitbucket pipe. It is meant to be used in combination of 
the Bitbucket app (to be released).

It will compute the coverage and send it to the app so you can view it directly in Bitbucket.

## Prerequisites

- Have the Bitbucket app (to be released) installed
- Use PHP
- Use PHP Unit for your tests

## What does the pipe do?

See `pipe.sh`

1. Run your tests with a coverage report
2. Get the coverage figure from the report
3. Send the coverage figure for the branch to the Bitbucket app

## Pipe public build

https://hub.docker.com/r/lalande300/code-coverage-pipe

## Use

In your bitbucket pipeline:

```
script:
  - pipe: lalande300/code-coverage-pipe:1.0.1
    variables:
      APP_URL: $APP_URL
```

Please read the Bitbucket documentation about pipes.

### Installing

If you want to build it yourself:

1. Pull the repository
2. Build the docker image
3. Publish the image
4. Use the pipe

## Help

Please contact me if you need help to set it up and make it work.

## Contributing

Open to all contributions. Please try to contact me first.

## Author

[lalande21185](https://github.com/lalande21185)

## License

Licensed under the GPLv3. See the LICENSE file for details.

Copyright 2025 [lalande21185](https://github.com/lalande21185)