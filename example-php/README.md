# DesignElements PHP Example

This demonstrates how you can implement the Amedia DesignElements multi-manifest via PHP.
Multi-manifest will only need one request against the API.

## About the code

We have implemented a simple client for this example. It should be farely easy to modify
this to your needs. You should also consider using a HTTP Client library. The example uses
`file_get_content` which is crappy when it comes to error handeling.

## Running the example with Docker

In the `designelements-example/example-php/` folder run:

~~~ shell
$ export APIKEY=XXX
$ docker-compose up -d
~~~

Replace `XXX` with the token given to you by Amedia Utvikling AS.

Now direct your browser to http://localhost:8080
