import java.util.*;

public class insertionBeginning
{
    public static void main (String[] args)
    {
        System.out.println("Input: ");
        
        Scanner console = new Scanner(System.in);
        
        int input = console.nextInt();
        console.nextLine();
        
        int[] oldArray = {1, 2, 3, 4};
        int[] newArray = new int[oldArray.length + 1];
        
        newArray[0] = input;
        for (int i = 0; i < oldArray.length; i++)
        {
            newArray[i + 1] = oldArray[i];
        }
        
        System.out.println("Old Array: " + Arrays.toString(oldArray));
        System.out.println("New Array: " + Arrays.toString(newArray));
    }
}