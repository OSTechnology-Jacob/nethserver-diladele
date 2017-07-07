Summary: NethServer Diladele package
Name: nethserver-diladele
Version: 1.0.0
Release: 1%{?dist}
License: GPL
URL: %{url_prefix}/%{name} 
Source0: %{name}-%{version}.tar.gz
BuildArch: noarch

Requires: nethserver-firewall-base, nethserver-httpd
Requires: squid >= 3.5.20
Requires: nethserver-sssd
Requires: qlproxy
Requires: python-devel, python-pip, python-ldap, net-tools, libjpeg-devel, zlib-devel, gcc-c++
Requires: httpd, mod_wsgi, krb5-workstation, mc
Requires: perl-Crypt-OpenSSL-X509, libecap, squid-helpers

BuildRequires: perl
BuildRequires: nethserver-devtools 

%description
NethServer Diladele Web Content Filtering

%prep
%setup

%build
%{makedocs}
perl createlinks

%install
rm -rf %{buildroot}
(cd root; find . -depth -print | cpio -dump %{buildroot})
%{genfilelist} %{buildroot} > %{name}-%{version}-filelist
echo "%doc COPYING" >> %{name}-%{version}-filelist

%post

%preun

%files -f %{name}-%{version}-filelist
%defattr(-,root,root)
%dir %{_nseventsdir}/%{name}-update

%changelog
* Fri Aug 07 2017 Jacob Oliver <jacob@ostechnology.co.uk> - 0.0.1-1
- Entered testing phase
