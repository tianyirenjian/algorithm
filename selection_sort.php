<?php
$array = [2,23,32,43,5,2,31,2,443,5,5,43,1,2,5,4,65,4,23,2,345,45,3];

function selection_sort($arr) {
    //�����1������Ϊû�б�Ҫ�������һ�α�ն
    for ($i = 0; $i < count($arr) - 1; $i++) {
        // �� i = 0 ʱ, Ĭ�ϵ�һ������С�ģ������
        // minIndex = 0, �� 1 ��ʼѭ��
        // �����С�� arr[$minIndex] �� �����¸�ֵ�� minIndex, �����и� 1�� minIndex = 12
        // һֱ����Ҳû�ҵ���С�ģ����԰� arr[0] ����С�� 1 ����һ��λ�á�
        // �� i = 1 ʱ
        // minIndex = 1, �� 2 ��ʼѭ��
        // ��������ķ������ҵ�����С��2���� 23������
        // �������� ...
        $minIndex = $i;
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
        }
        //��������ֵ
        list($arr[$i], $arr[$minIndex]) = [$arr[$minIndex], $arr[$i]];;
    }
    return $arr;
}

var_dump(selection_sort($array));
