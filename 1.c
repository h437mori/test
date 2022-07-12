#include <stdio.h>

int main(void)
{
  int n;

  printf("n = ");
  scanf("%d", &n);

  //&がビット演算子として使われていないと考えたため、n&1に括弧を付けた
  if( (n & 1) == 0 ){
    printf("%d は偶数です\n", n);
  }
  return 0;
}
