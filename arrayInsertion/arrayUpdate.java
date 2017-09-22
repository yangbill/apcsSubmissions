import java.util.*;

public class arrayUpdate
{
    public static void main (String[] args)
    {
        System.out.println("Index and Value");
        
        Scanner console = new Scanner(System.in);
        
        int index = console.nextInt();
        int value = console.nextInt();
        console.nextLine();
        
        int[] oldArray = {1, 2, 3, 4};
        System.out.println("Old Array: " + Arrays.toString(oldArray));
        oldArray[index] = value;
        System.out.println("New Array: " + Arrays.toString(oldArray));
    }
}