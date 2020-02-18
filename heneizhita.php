<?php

//河内之塔

//描述：  有3个柱子  （A，B，C），其中A柱子上有从上往下自小而大放着64个金盘，现在让从A柱子移到C柱子
// 移动过程中，小盘子在大盘子之上

//解题思路:  当n=1的时候, 则直接 A -> C  当n=2的时候 则是A->B A->C B->C
//当n大于2的时候 则把1->n-1看成一个整体  也可以用这个方法。
//计算需要多少步骤从A移动到C

function hanoi (int $n, string $A, string $B, string $C)
{
    if ($n == 1) {
        printf("从%s移动到%s\n", $A, $C);
    } else {
        hanoi($n - 1, $A, $C, $B);
        printf("从%s移动到%s\n", $A, $C);
        hanoi($n - 1, $B, $A, $C);
    }
}

$n = 3;

hanoi($n, "A", "B", "C");