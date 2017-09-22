import java.util.*;

public class insertBeforeIndex
{
    public static void main(String[] args)
    {
        System.out.println("Input number and index");
        
        Scanner console = new Scanner(System.in);
        
        int input = console.nextInt(); //Getting input from user
        int index = console.nextInt(); //
        console.nextLine();
        
        int[] oriArray = {1, 2, 3, 4};
        int[] newArray = new int[oriArray.length + 1];
        for (int i = 0; i < newArray.length; i++)
        {
            if (i < index)
            {
                newArray[i] = oriArray[i];
            }
            else if(i == index)
            {
                newArray[i] = input;
            }
            else if (i > index)
            {
                newArray[i] = oriArray[i-1];
            }
        }
        
        System.out.println("Old Array: " + Arrays.toString(oriArray));
        System.out.println("New Array: " + Arrays.toString(newArray));
    }
}