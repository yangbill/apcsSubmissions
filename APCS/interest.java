import java.util.*;

public class interest
{
    public static void main (String[] args)
    {
        System.out.println("Number of months, payment per month, initial car value, percent depreciation");
        
        Scanner console = new Scanner(System.in);
        
        String input = console.nextLine();
        
        String[] sInput = input.split(" ");
        float numMonths = Float.parseFloat(sInput[0]);
        float downPay = Float.parseFloat(sInput[1]);
        float iniVal = Float.parseFloat(sInput[2]);
        int deps = Integer.parseInt(sInput[3]);
        
        float car = downPay + iniVal;
        
        int count = 0;
        
        float dep = 0;
        
        System.out.println("Num Months, Down Pay Amt, Loan Amt. % Decrease");
        
        String[] depList = new String[deps];
        
        for (int i = 0; i < deps; i++)
        {
            depList[i] = console.nextLine();
        }
        for (int i = 0; i < numMonths; i++)
        {
            Scanner input2 = new Scanner(depList[count]);
            if (i == input2.nextInt())
            {
                dep = input2.nextFloat();
                if (count < deps - 1)
                {
                    count++;
                }
            }
            car *= (1.0 - dep);
            if (i > 0)
            {
                iniVal -= downPay;
            }
            if (car > iniVal)
            {
                System.out.println(i + "month");
                if (i != 1)
                {
                    System.out.println("s");
                }
                System.out.println(" ");
                break;
            }
            System.out.println(car + " " + iniVal);
        }
    }
}