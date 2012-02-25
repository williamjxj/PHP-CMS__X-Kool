#! /usr/bin/perl
# grant all on demo.* to demo@localhost identified by '~@$^*)97531kjhgfdsa'

use strict;
use warnings;
use DBI;

my %attrs = (AutoCommit => 1);
my $dsn = "DBI:mysql:host=localhost;database=demo";
my $dbh = DBI->connect($dsn, "demo", "~@$^*)97531kjhgfdsa", \%attrs) or die "Can't connect to MySQL server\n";

print "Connected.\n";
$dbh->disconnect();

