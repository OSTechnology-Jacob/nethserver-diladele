=========
Web proxy
=========

Configure the web proxy (Squid) and bypass rules.

Proxy
=====

The web proxy works to reduce bandwidth usage by caching
the pages you visit. It can also enforce content filtering.

Web proxy can be enabled only on green (local networks) and blue (guest networks) zones.

Manual
    Squid will listen on port 3128. All client must be explicitly configured to use the proxy.

Authenticated
    Each user will be forced to enter username and password.
    Squid will listen on port 3128. All client must be explicitly configured to use the proxy.

Transparent
    All HTTP traffic on port 80 will be redirect through the proxy.
    No client configuration is needed.

Transparent with SSL
    All HTTP and HTTPS traffic on port 80 and 443 will be redirect through the proxy.
    No client configuration is needed.

Block HTTP and HTTPS ports
    If enabled, clients will not be able to bypass the proxy.
    External sites on ports 80 and 443 will be reachable only using the proxy.

Cache
=====
Option to clear Squid disk cache and SSLDB
