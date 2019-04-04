#!/bin/bash

i=0;
file_find_result=$(find ./tests -path *.php -type f)

echo "" > test.log
for file in $file_find_result
	do
		((i++))
		echo "start test #$i name:$file"
		test_result=$(./phpunit $file)
		echo "----------------$i----------------------" >> test.log
		echo "--------$file---------" >> test.log
		echo "$test_result" >> test.log
		echo "----------------------------------------" >> test.log
		echo "" >> test.log
	done