### use of `lib/promptInput.php`

##### convert *.c in CDN of cs50 *
> example: https://cdn.cs50.net/2020/fall/lectures/1/src1/hello1.c

```c
// get_string and printf with %s
#include <cs50.h>
#include <stdio.h>

int main(void)
{
    string answer = get_string("What's your name? ");
    printf("hello, %s\n", answer);
}
```
> hello1.c to hello1.php
```php
// get_string and printf with %s
include_once "./lib/promptInput.php";

$answer = get_string("What's your name? ");
printf("hello, %s\n", $answer);
```

### run hello1.php
```bash
php hello1.php
```