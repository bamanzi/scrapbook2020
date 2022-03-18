Summary: GNU indent
Name: indent
Version: 2.2.6
Release: 1
Source0: %{name}-%{version}.tar.gz
License: GPL
Group: Development/Tools

%description
The GNU indent program reformats C code to any of a variety of
formatting standards, or you can define your own.

%prep
%setup -q

%build
./configure
make

%install
make install

%files
%defattr(-,root,root)
/usr/local/bin/indent
%doc /usr/local/info/indent.info
%doc %attr(0444,root,root) /usr/local/man/man1/indent.1
%doc COPYING AUTHORS README NEWS
