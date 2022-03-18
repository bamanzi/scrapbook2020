Summary: GNU indent
Name: indent
Version: 2.2.6
Release: 3
Source0: %{name}-%{version}.tar.gz
Patch0: %{name}-2.2.6.patch
License: GPL
Group: Development/Tools
BuildRoot: %{_builddir}/%{name}-root

%description
The GNU indent program reformats C code to any of a variety of
formatting standards, or you can define your own.

%prep
%setup -q
%patch -p1

%build
./configure
make

%install
rm -rf $RPM_BUILD_ROOT
make DESTDIR=$RPM_BUILD_ROOT install

%clean
rm -rf $RPM_BUILD_ROOT

%files
%defattr(-,root,root)
/usr/local/bin/indent
%doc /usr/local/info/indent.info
%doc %attr(0444,root,root) /usr/local/man/man1/indent.1
%doc COPYING AUTHORS README NEWS